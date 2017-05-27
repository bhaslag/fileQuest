<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
    <!--Custom stylesheets -->

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<main>
    <div class="row">
        <div class="col s12">
            <div class="row" style="height: 160px">
            </div>
            <div class="row">
                <div class="col s4 offset-s4">
                    <form action="file.php" method="POST" enctype="multipart/form-data">
                        <div class="file-field input-field">
                            <div class="btn">
                                <span>File</span>
                                <input type="file" id="upload" name="upload[]" multiple="multiple">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload one or more files">
                            </div>
                        </div>
                            <button class="btn-floating waves-effect waves-light blue" type="submit" name="submit">
                                <i class="material-icons">file_upload</i>
                            </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</body>
</html>