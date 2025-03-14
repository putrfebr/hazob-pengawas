//to save upload file
let store = [];

//delete temp uploaded photo
function del(x) {
    store.splice(x,1);
    showPhoto();
}

//to show file upload
$(".uploader-btn").click(function () {
    $("#photo").click();
});

//show photo list
function showPhoto(){
    let output = $(".photo-show");
    output.empty();

   for(let x in store){
        let reader = new FileReader();
        reader.onload = function(){
            let dataURL = reader.result;
           output.append(`
           <div class="p-0 m-1 position-relative d-inline-block photo-to-upload">
            <img class="temp-photo" src="${dataURL}" >
            <button class="btn btn-danger btn-sm position-absolute" onclick="del(${x})" style="bottom: 5px;right: 5px">
                <i class="fa fa-trash"></i>
            </button>
           </div>
           `);
        };
        reader.readAsDataURL(store[x]);
    }
}

//add store record
$("#photo").on("change",function (e) {
    let file = e.target.files;
    for(let x in file){
        if(x != "length" && x < file.length){
            store.push(file[x]);
        }
    }
    showPhoto();
});

//upload form
$("#form").on("submit",function (e) {
    e.preventDefault();
    let upload = $(".upload");
    let uploadBtnData = upload.html();
    upload.html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Loading...`);
    let form =$(this)[0];
    let formData = new FormData(form);
    let to = $(this).attr("action");

    store.map(function (el) {
        formData.append("store[]",el,el.name);
    });

    formData.delete("photo[]");

    $.ajax({
        method:"post",
        url:to,
        data:formData,
        contentType:false,
        processData: false,
        success:function (data) {
            let result = JSON.parse(data);
            console.log(result);
            if(result.status == 200){
                $("input,textarea").val("");
                store = [];
                showPhoto();
                upload.html(uploadBtnData);
            }
        }
    });

});