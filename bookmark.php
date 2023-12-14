<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Bookmark App</title>
    <link rel="stylesheet" href="style.css">
</head>

<body onload="fetchBookmarks()">

    <main role="main">


            <div class="container">
                <h2 class="display-4">Bookmark App</h2>


                <form id="myForm">
                    <div class="form-group">
                        <label>Title: </label><br>
                        <input type="text" class="form-control" id="webtitle"></input>
                    </div>

                    <div class="form-group">
                        <label>Link: </label><br>
                        <input type="text" class="form-control" id="weblink"></input>
                    </div>
                    <div class="form-group">
                        <label>Description: </label><br>
                        <textarea rows="3" cols="20" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Category: </label><br>
                        <input type="text" class="form-control" id="category"></input>
                    </div>
                    <button type="submit" class="btn">Submit</button>
                </form>

            </div>
           


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hed">
                        <table class="table">
                            <tr><th>Title</th><th>Description</th><th>Category</th><th>Visit Website</th><th>Delete</th></tr>
                           </table> 
                    </div>
                   
                        <div id="bookmarksResults">
                           <table>
                            <tr><th>Title</th><th>Description</th><th>Category</th><th>Visit</th><th>Delete</th></tr>
                           </table> 
                        </div>



                </div>
               
            </div>

            <hr>
            <p class="mt-3">Logout <a href="index.php">Log out</a></p>
        </div> 

    </main>

  


        <script src="javascript.js"></script>
        

</html>