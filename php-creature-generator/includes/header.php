<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!-- Dynamic Page Title -->
<title><?php echo $page_title; ?></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
<!-- Removed Default CSS, using Normalize that is included with Bootstrap -->
<style>
html {
    position: relative;
    min-height: 100%;
}
body {
    font-family: 'Roboto', Arial, sans-serif;
    color: #f5f5f5;
    margin-bottom: 60px;
    background: url('images/background.jpg') no-repeat;
}
img {
    border: 1px solid #333;
}
h1 {
    color: lightblue;
}
h2 {
    color: lightgreen;
}
h3 {
    color: lightgoldenrodyellow;
}
label[for="alien"] {
    color: lightsalmon;
}
label[for="robot"] {
    color: lightseagreen;
}
#error-message {
    color: firebrick;
}
#description {
    display: none;
}
.footer {
    color: lightcoral;
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 60px;
}
</style>
</head>