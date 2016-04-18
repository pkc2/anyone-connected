<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script> </script>
    </head>
    <body>
        
        // put your code here
        <form id="form" action="json/request.json">
  <div class="form-group">
    <label for="inputName">Name</label>
    <input type="text" class="form-control" id="inputName" name="name">
  </div>
  <div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="email" class="form-control" id="inputEmail" name="email">
  </div>
  <div class="form-group">
    <label for="inputComment">Comment</label>
    <textarea class="form-control" id="inputComment" name="comment" rows="6"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
       
    </body>
</html>
