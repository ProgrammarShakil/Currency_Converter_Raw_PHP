<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
           <form action="" method="post" enctype="multipart/form-data">
                    <label for="">Your Name :</label>
                        <input style="font-size:large" name="sender_name" class="p-2 mb-2 form-control" type="text" placeholder="Sender Name"> 
                    <label for="">Your Tag :</label>
                        <input style="font-size:large" name="sender_tag" class="p-2 mb-2 form-control" type="text" placeholder="Sender Tag"> 
                    <label for="">Your Amount :</label>
                        <input style="font-size:large" name="amount" class="p-2 mb-2 form-control" type="text" placeholder="Amount"> 
                    <label for="">Upload Your Screenshot :</label>
                        <input class="form-control mb-2" type="file" name="fileToUpload">
                    <label for="">Others Text Here :</label>
                        <textarea style="max-height: 80px;" class="form-control" name="others_text" id="" cols="10" rows="10" placeholder="Others"></textarea>
                    
                        <input type="submit" class="btn btn-danger mt-3 btn-block" value="Submit Your Request">
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>     
</body>
</html>