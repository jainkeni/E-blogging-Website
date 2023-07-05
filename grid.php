<?php
    session_start();
    if(isset($_SESSION['ID']))
    {
        if(isset($_POST['publish']))
        {
            $title=$_POST['title'];
            $desc=$_POST['description'];
            
            $author=$_SESSION['ID'];
            $category=$_POST['category'];
            
            $filetmp = $_FILES["customFile"]["tmp_name"];
            $filename = $_FILES["customFile"]["name"];
            $filepath = "assets/uploads/".$filename;
            move_uploaded_file($filetmp,$filepath);
            
            if(!empty($title)&&!empty($desc)&&!empty($author)&&!empty($category)&&!empty($filename))
            {

                include('config.php');
                $stmt = $db->prepare("insert into posts (title,description,date,author,status,featured,category) values(?,?,now(),?,'publish',?,?)");
                $stmt->bind_param("sssss", $title, $desc, $author, $filename, $category);
                if($stmt->execute()){}
                else{
                    echo "<script type='text/javascript'>alert('Couldnt Post')</script>";
                    echo("Error description: " . mysqli_error($db));
                }
            }
            else
            {
                echo "<script type='text/javascript'>alert('Please Fill All The Fields')</script>";
            }
        }
        if(isset($_POST['draft']))
        {
            $title=$_POST['title'];
            $desc=$_POST['description'];
            
            $author=$_SESSION['ID'];
            $category=$_POST['category'];
            
            echo $author;
            echo $category;
            
            $filetmp = $_FILES["customFile"]["tmp_name"];
            $filename = $_FILES["customFile"]["name"];
            $filepath = "assets/uploads/".$filename;
            move_uploaded_file($filetmp,$filepath);

            if(!empty($title)&&!empty($desc)&&!empty($author))
            {
                include('config.php');
                $stmt = $db->prepare("insert into posts (title,description,date,author,status,featured,category) values(?,?,CURDATE(),?,'draft',?,?)");
                $stmt->bind_param("sssss", $title, $desc, $author, $filename, $category);
                
                $stmt->execute();
            }

        }
    }
    else
    {
        header("Location:login.php");
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
    <!-- Swiper Slider -->
    <link rel="stylesheet" href="assets/css/swiper.min.css" type="text/css">
    <!-- Fonts -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/font-awesome.min.css">
    <!-- OWL Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" type="text/css">
    <!-- Animate -->
    <link rel="stylesheet" href="assets/css/animate.min.css" type="text/css">
    <!-- NProgress -->
    <link rel="stylesheet" href="assets/css/nprogress.css" type="text/css">
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
            background-color: #eceff1;
        }
    </style>
    <script src='assets/tinymce/tinymce.min.js'></script>
  </head>
  <body>
      
    <?php include "template/header.php" ?>
    <div class="container-fluid mt-5">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
            <div class="row mx-2">
                <div class="col-9">
                    <div class="card mb-4">
                        <div class="row m-3">
                            <div class="col-12">
                                <h6 class="card-title pl-2 pt-3">Title<sup style="color:red">*</sup></h6>
                                <input type="text" class="form-control " name="title" placeholder="Enter Title For Your Blog" style="border: 1px solid #dee2e6 !important; border-color: #ffc107 !important;" required>
                                
                            </div> 
                        </div>
                        <div class="row m-3">
                            <div class="col-12">
                                <h6 class="card-title pl-2 pt-2">Blog Description<sup style="color:red">*</sup></h6>
                                <textarea name="description" id="description"  required></textarea>
                                
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Upload Title Image <sup style="color:red">*</sup> </h5>
                            <hr>
                            <div class="m-3">
                                <div class="row">
                                    <div class="custom-file shadow-sm">
                                        <input type="file" class="custom-file-input" id="customFile" name="customFile" accept="image/*" required/>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>    
                                </div>
                                
                            </div>    
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Category<sup style="color:red">*</sup></h5>
                            <hr>
                            <select name="category" class="form-control shadow-sm" required>
                                <option selected disabled value="">Choose Category</option>
                                <option value="World">World</option>
                                <option value="Technology">Technology</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="Health">Health</option>
                                <option value="Sports">Sports</option>
                                <option value="Travel">Travel</option>
                            </select>         
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Save Draft</h5>
                            <hr>
                            <div class="m-3">
                                <div class="row">
                                    <button class="btn btn-outline-warning shadow" name="draft" type="submit">Save as Draft</button>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <img class="card-img-top" src="holder.js/100x180/" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Publish</h5>
                            <hr>
                            <div class="m-3">
                                <div class="row">
                                    <button class="btn btn-warning col-12 shadow" type="submit" name="publish">Publish</button>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <br>
                </div>    
            </div>
        </form>
    </div>
    <?php include "template/footer.php" ?>
	<!-- /.Section Footer -->

    <!-- Javascript Files -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Swiper Slider -->
    <script src="assets/js/swiper.min.js"></script>
    <!-- OWL Carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Waypoint -->
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <!-- Easy Waypoint -->
    <script src="assets/js/easy-waypoint-animate.js"></script>
    <!-- Counter -->
    <script src="assets/js/jquery.countup.js"></script>
    <!-- Counter -->
    <script src="assets/js/jquery.countup.js"></script>
    <!-- NProgress -->
    <script src="assets/js/nprogress.js"></script>
    <!-- Ticker -->
    <script src="assets/js/jquery.newsTicker.min.js"></script>
    <!-- Scripts -->
    <script src="assets/js/scripts.js"></script>                                   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>      
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>   
    <script>
        tinymce.init({
            selector: 'textarea#description',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            imagetools_cors_hosts: ['picsum.photos'],
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            toolbar_sticky: true,
            autosave_ask_before_unload: true,
            autosave_interval: "30s",
            autosave_prefix: "{path}{query}-{id}-",
            autosave_restore_when_empty: false,
            autosave_retention: "2m",
            image_advtab: true,
            /*content_css: '//www.tiny.cloud/css/codepen.min.css',*/
            link_list: [
                { title: 'My page 1', value: 'https://www.codexworld.com' },
                { title: 'My page 2', value: 'https://www.xwebtools.com' }
            ],
            image_list: [
                { title: 'My page 1', value: 'https://www.codexworld.com' },
                { title: 'My page 2', value: 'https://www.xwebtools.com' }
            ],
            image_class_list: [
                { title: 'None', value: '' },
                { title: 'Some class', value: 'class-name' }
            ],
            importcss_append: true,
            file_picker_callback: function (callback, value, meta) {
                /* Provide file and text for the link dialog */
                if (meta.filetype === 'file') {
                    callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
                }
            
                /* Provide image and alt text for the image dialog */
                if (meta.filetype === 'image') {
                    callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
                }
            
                /* Provide alternative source and posted for the media dialog */
                if (meta.filetype === 'media') {
                    callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
                }
            },
            templates: [
                { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
                { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
                { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
            ],
            template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
            template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
            height: 600,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: "mceNonEditable",
            toolbar_mode: 'sliding',
            contextmenu: "link image imagetools table",
        });
    </script>                       
  </body>
</html>