<html>

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <h1>Form</h1>
        <?php
$errors = [];

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['name'])) {
        $errors['name'] = 'Būtina įvesti vardą';
    }
    
    if (empty($_POST['city']) && empty($_POST['postal_code'])) {
        $errors['city'] = 'Būtina įvesti pašto kodą arba miestą!';
        $errors['postal_code'] = 'Būtina įvesti pašto kodą arba miestą!';

    }

}

var_dump($errors);
?>
        <div class="row">
            <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <i class="icon-calendar"></i>
                        <h3 class="panel-title">Inputs</h3>
                    </div>



                    <?php if (!empty($errors)) {?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo implode('<br>', array_unique($errors); ?>
                    </div>

                    <?php }?>

                    <div class="panel-body">
                        <form class="form-horizontal row-border" method="POST">
                            <div class="form-group <?php echo $errors['name'] ? 'has-error' : '' ?>">
                                <label class="col-md-2 control-label">Vardas</label>
                                <div class="col-md-10">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group <?php echo $errors['name'] ? 'has-error' : '' ?>">
                                <label class="col-md-2 control-label">Miestas</label>
                                <div class="col-md-10">
                                    <input type="text" name="city" class="form-control">
                                </div>
                            </div>
                            <div class="form-group <?php echo $errors['name'] ? 'has-error' : '' ?>">
                                <label class="col-md-2 control-label">Pašto indeksas</label>
                                <div class="col-md-10">
                                    <input type="text" name="postal_code" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label"></label>
                                <div class="col-md-10">
                                    <input type="submit" value="Siųsti" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>