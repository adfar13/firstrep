<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>file upload</title>
</head>
<body>
  <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        require_once("inc/fileUpload.php");
        echo $_FILES['my_file']["name"];
        $source=$_FILES['my_file']["tmp_name"];
        $destination="uploads/abc.pdf";    
        move_uploaded_file($source,$destination);
    }
    ?>
   <form action ="" method ='post' enctype = "multipart/form-data">
       <label> select your file</label>
    <input type ="file" name='my_file'>
    <input type ="submit" value='upload'>
    </form>
    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, quia, harum. Porro, consequuntur. Dolore non quae, rerum tenetur. Illo neque sit recusandae, consequatur ipsam suscipit harum praesentium non? Beatae, vitae.</div>
    <div>Facere repellat nihil error veniam quis quidem ipsa soluta nostrum at velit, suscipit tempora ratione dignissimos saepe, necessitatibus, voluptates quia consectetur accusamus, molestias expedita dolore officiis! Suscipit dolorum ducimus sit.</div>
    <div>Fugiat suscipit fugit cumque, magnam voluptas repellendus provident, odit consequuntur modi quia nisi architecto officia molestiae. Dignissimos ullam modi quod quaerat. Labore nesciunt maiores atque debitis repellendus totam, officiis pariatur.</div>
    <div>Aperiam, magni est quo provident labore. Cum corporis accusantium, iure saepe modi eligendi quaerat incidunt at recusandae, quos harum. Inventore placeat veritatis, temporibus, iste nostrum hic consequatur praesentium dicta. Dolor.</div>
    <div>Modi aut inventore quia excepturi quibusdam dicta sapiente, molestiae, esse unde qui distinctio? Vero molestiae reiciendis ad fuga dicta, error recusandae, aspernatur facere, eum libero placeat tempore velit molestias sequi.</div>
    <div>Ut, totam, maiores. Est maiores earum quidem magni, beatae quis ab omnis obcaecati. Ducimus aspernatur assumenda repellendus nam libero corrupti voluptates quaerat blanditiis, laudantium, minus eaque, ullam cumque illo accusantium.</div>
    <div>Cumque quasi sequi quae illo, pariatur minus tempore id, beatae, harum mollitia unde neque totam, aspernatur incidunt praesentium alias. Itaque maxime soluta deserunt veritatis beatae atque debitis excepturi cum impedit?</div>
    <div>Dicta veniam earum assumenda non, id saepe quae asperiores dolores accusamus deleniti quam laboriosam distinctio necessitatibus eveniet possimus sed sapiente alias voluptatem harum. Recusandae eligendi iusto incidunt architecto. Odio, doloribus.</div>
    <div>Alias aspernatur dignissimos illum deserunt recusandae aliquid ad soluta rerum rem. Quasi optio, accusantium quas sequi, saepe pariatur est commodi et consequatur, ipsam omnis, nisi vero voluptatem aspernatur deserunt laudantium!</div>
    <div>Amet deleniti, rerum quam, vero minus iusto. Quidem nihil vero reprehenderit deserunt, dicta excepturi dolores sunt, enim quia, eligendi ab! Quidem ipsum esse reprehenderit veniam impedit sequi tenetur suscipit saepe!</div>
</body>
</html>