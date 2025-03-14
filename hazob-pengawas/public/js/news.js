const apiUrl = "https://gnews.io/api/v4/search?q=safety&lang=en&country=us&max=10&apikey=cc93846ff4f69daeb845c4392209c402"; // Ganti dengan API yang benar
const newsContainer = document.getElementById("news-container");

async function fetchHSENews() {
    try {
        const response = await fetch(apiUrl);
        const data = await response.json();

        if (data.length > 0) {
            displayNews(data);
        } else {
            newsContainer.innerHTML = "<p>Tidak ada berita terbaru saat ini.</p>";
        }
    } catch (error) {
        console.error("Gagal mengambil berita:", error);
        newsContainer.innerHTML = "<p>Gagal memuat berita.</p>";
    }
}

function displayNews(articles) {
    newsContainer.innerHTML = "";
    articles.slice(0, 5).forEach((article) => {
        const newsItem = document.createElement("div");
        newsItem.classList.add("news-item");
        newsItem.innerHTML = `
            <h3><a href="${article.url}" target="_blank">${article.title}</a></h3>
            <p>${article.description || "Tidak ada deskripsi."}</p>
            <small>${new Date(article.publishedAt).toLocaleDateString()}</small>
        `;
        newsContainer.appendChild(newsItem);
    });
}

fetchHSENews();