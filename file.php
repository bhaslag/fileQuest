<?php

if(isset($_POST['submit'])){

    if(count($_FILES['upload']['name']) == 0) {

        echo "No files selected for upload. Try again!";
    }

    else {
            //Loop through each file
            for ($i = 0; $i < count($_FILES['upload']['name']); $i++) {

                $uploadDir = 'uploads/';
                $uploadFile = $uploadDir . basename($_FILES['upload']['name'][$i]);
                $uploadOk = 1;
                $imageFileType = pathinfo($uploadFile, PATHINFO_EXTENSION);

                //check file size
                if ($_FILES["upload"]["size"][$i] > 1000000) {
                    $uploadOk = 0;
                    echo $_FILES["upload"]["name"][$i] . " " . "is over the size limit and was not uploaded";
                }

                // Allow certain file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif"
                ) {
                    $uploadOk = 0;
                    echo $_FILES["upload"]["name"][$i] . " " . "is the wrong file type and was not uploaded";
                }

                //Get the temp file path
                $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

                //Make sure we have a filepath
                if ($tmpFilePath != "") {

                    //save the filename
                    $uname = $_FILES['upload']['name'][$i];

                    //save the url and the file
                    $filePath = "uploads/" . "image" . uniqid() . '.' . $imageFileType;
                    if ($uploadOk == 0) {
// if everything is ok, try to upload file
                    } else {

                        //Upload the file into the temp dir
                        if (move_uploaded_file($tmpFilePath, $filePath)) {

                            $paths[] = $filePath;
                        }
                    }
                }
            }
        }
    }

    ?>

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
            <?php foreach ($paths as $path):?>
            <div class="col s4 m4" id="imgBox" >
                <div class="card" >
                    <div class="card-image" >
                        <img src = "<?php echo $path; ?>" >
                        <button class="btn-floating halfway-fab waves-effect waves-light red dltBtn" data-file="<?php echo $path ?>"><i class="material-icons">delete</i ></button >
                    </div >
                    <div class="card-content">
                        <span class="card-title" > <?php echo str_replace("uploads/","", $path) ?> </span >
                    </div>
                </div >
            </div >
            <?php endforeach; ?>
        </div >


    </main>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script type="text/javascript" src="fileQuest.js"></script>
    </body>
    </html>