

document.getElementById("myForm").addEventListener("submit", saveBookmark);


function saveBookmark(e) {


    let webtitle = document.getElementById('webtitle').value;
    let weblink = document.getElementById('weblink').value;
    let description = document.getElementById('description').value;
    let category = document.getElementById('category').value;

    if (!validateForm(webtitle, weblink,description,category)) {
        return false;


    }


    let bookmark = {
        name: webtitle,
        url: weblink,
        description:description,
        category:category
    }



    if (localStorage.getItem('bookmarks') === null) {
       
        let bookmarks = [];
        
        bookmarks.push(bookmark);
    
        localStorage.setItem("bookmarks", JSON.stringify(bookmarks))
    } else {
        
        let bookmarks = JSON.parse(localStorage.getItem('bookmarks'));
        
        bookmarks.push(bookmark);
       
        localStorage.setItem("bookmarks", JSON.stringify(bookmarks));

    }


document.getElementById('myForm').reset();



    fetchBookmarks();

    e.preventDefault();
}

function deleteBookmark(url) {


    let bookmarks = JSON.parse(localStorage.getItem('bookmarks'));
   
    for (let i = 0; i < bookmarks.length; i++) {

        if (bookmarks[i].url == url) {
          
            bookmarks.splice(i, 1);

        }

    }

    localStorage.setItem("bookmarks", JSON.stringify(bookmarks));

    fetchBookmarks();
}




function fetchBookmarks() {
    let bookmarks = JSON.parse(localStorage.getItem('bookmarks'));

    let bookmarksResults = document.getElementById('bookmarksResults');

    bookmarksResults.innerHTML = '';

    for (let i = 0; i < bookmarks.length; i++) {
        const name = bookmarks[i].name;
        const url = bookmarks[i].url;
        const description=bookmarks[i].description;
        const category=bookmarks[i].category;
        bookmarksResults.innerHTML += '<div class="done">' +
        '<table class="table">'+
        '<tr><th>'+name+'</th><th>'+description+'</th><th>'+ category +'</th> <th>'+
        ' <a class="btn btn-light" target="_blank" href="' + url + '"> Visit </a> '+
       '</th> <th> '+
       '<a onclick="deleteBookmark(\'' + url + '\')" class="btn" href="#"> Delete </a></th> </tr></table></div>';
    }
}


function validateForm (webtitle, weblink,description,category) {

    if (!webtitle || !weblink || !description ||!category) {
        alert("Write in all fields");
        return false;
    }

   

    return true;

}