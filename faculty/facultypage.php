<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Faculty</title>
</head>
<style>
.mybtn
{
        width : 200px !important;
}
</style>
<body>
        <div class="container-fluid">

        <div class="row">
                <img src="rait_new.png" alt="" width="220" height="200">
        </div>
        <div class="row">
        <div class="col-md-3">
                <div class="row">
                        <h1>Upload</h1>
                </div>
                <div class="row">
                        <h1>View Uploaded</h1>
                </div>
                <div class="row">
                        <h1>Other's Uploaded</h1>
                </div>
        </div>
        <div class="col-md-9">
                <form enctype="multipart/form-data" method="post" action="upload.php">
                        <div class="form-group">
                          <label for="Title">Title</label>
                          <input type="text" class="form-control" id="title" name='title'  placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                          <label for="description">Description</label>
                        <textarea class="form-control" name="description"></textarea>
                </div>

                        <div class="form-group">
                          <label for="subject">Subject</label>
                        <select name="subject">
                                <option value="ADA">ADA</option>
</select>
                        </div>
                        <div class="form-group">
                                        <label for="subject">SEM</label>
                                      <select name="sem">
                                              <option value="V">V</option>
              </select>
                                      </div>
                       
                                <input type="file" name='file'>
                        <br>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
        </div>
        </div>
</div>

</body>
</html>