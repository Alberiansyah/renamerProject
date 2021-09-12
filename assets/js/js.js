// Initialize the Input Form
let submitFolderPath = document.getElementById('submitFolderPath');
let resetFolderPath = document.getElementById('resetFolderPath');
let folderPath = document.getElementById('folderPath');
let tempFolderPath = document.getElementById('tempFolderPath');

// Create a cookie
submitFolderPath.addEventListener('click', function(){

    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200) {
            let date = new Date();
            date.setDate(date.getDate() + 1);
            const expires = "expires=" + date;
            document.cookie = "path=" + folderPath.value + "; " + expires + "; path=/";
            tempFolderPath.value = folderPath.value;
        }
    }

    xhr.open('GET', 'index.php', true);
    xhr.send();

});

// Delete a Cookie
resetFolderPath.addEventListener('click', function(){

    let xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200) {
            let date = new Date();
            date.setDate(date.getDate() - 1);
            const expires = "expires=" + date;
            let cookie = document.cookie = "path=" + folderPath.value + "; " + expires + "; path=/";
            folderPath.value = '';
            tempFolderPath.value = folderPath.value;
        }
    }

    xhr.open('GET', 'index.php', true);
    xhr.send();

});


// Initialize the Form
let submitForm = document.getElementById('submitForm');

submitForm.addEventListener('click', function(){
    // Initialize the Form Data
    let namaFileBaruFormData = document.getElementById('namaFileBaru').value;
    let namaFileLamaFormData = document.getElementById('namaFileLama').value;
    let tempFolderPathFormData = document.getElementById('tempFolderPath').value;
    let tempNamaFormData = document.getElementById('tempNama').value;

    let postData = 'namaFileBaru='+namaFileBaruFormData+'&namaFileLama='+namaFileLamaFormData+'&tempFolderPath='+tempFolderPathFormData+'&tempNama='+tempNamaFormData;
    let xhr = new XMLHttpRequest();

    xhr.open('POST', 'function/function.php', true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200) {
            let alert = document.getElementById('alert');
            alert.innerHTML = "<center class='m-3'><h4><i class='bi bi-gear-fill'></i> Processing...</h4></center>";
            $("#alert").load(window.location.href + " #alert");            
        }
    }
    xhr.send(postData);
});

function showname() {
    var name = document.getElementById('namaFileLama');
    var nameFiles = name.files.item(0).name;
    var nameBaru = document.getElementById('tempNama');
    nameBaru.value = nameFiles;
};

function backToTop(){
    $("html, body").animate({ scrollTop: 0}, 400);
}

function pushToBottom(){
    $("html, body").animate({ scrollTop: $(document).height()-$(window).height() }, 400);
}