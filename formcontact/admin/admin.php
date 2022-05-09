        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            
            <h1 style="text-align:center;">CONTACT FORM</h1>
            <br><br>
            <section  style=" display:flex ;justify-content:center ; ">
            
            <form action="#" style=" display:flex ;justify-content:center ;flex-direction:column; " method="POST">
            
                <label for="Name">UserName</label>
            
                <br><input  type="text" placeholder="Enter Your UserName" style="width:300px" name="username">

                <br><label for="email">Email</label>
                <br><input type="email" placeholder="Enter Your Email" style="width:300px" name="email">

                <br><label for="number">Phone Number</label>
                <br><input type="tél" placeholder="Enter Your Phone Number" style="width:300px" name="phone_number">

                <br><label for="comments">Questions/Comments</label>
                <br><textarea name="Your_Comments" placeholder="Enter Your Questions Or Your Comments"style="width:300px" name="comment" ></textarea>
                <br>
                <!-- <input type="submit" name="edit_form" class="btn btn-dark" value="SAVE"style="width:300px" /> -->
                
            </form>
            <section style="display:flex;flex-direction:column ;margin: 6rem;padding:6em">
            <form action="#" method="POST">
            <label for="UserName">UserName</label>
                <input type="radio"name="name" value="name"><br><br>
                <label for="Email">Email</label>
                <input type="radio" name="email" value="email"  ><br><br>
                <label for="Phone Number">Phone Number</label>
                <input type="radio"name="number"value="nmber" ><br><br>
                <label for="Questions/Comments">Questions/Comments</label>
                <input type="radio"name="Comments"value="Comments" ><br><br>
                <input name="submit" type="submit" value="submit" class="btn btn-dark" style="width:300px" >
                </form>
                
                </section>
        
            </section>

        <?php



            if ( isset( $_POST['name'] ) )
            {$name= true;}
        else
        { 
            $name= false;
        }

            if(isset( $_POST['email'] ) )
            {$email= true;}
        else
        { 
            $email= false;
        }

            if(isset( $_POST['number'] ) )
            {$number= true;}
        else
        { 
            $number= false;
        }

            if(isset( $_POST['Comments'] ) )
            {$Comments= true;}
        else
        { 
            $Comments= false;
        }

            $data= array('name','email','number','Comments');
            $vari= array($name, $email, $number, $Comments);
            for($i=0; $i<count($data);$i++)
            {
                if ( isset( $_POST['submit'] ) ){
            update_option($data[$i],$vari[$i]);
        }

            }

            ?>


        <?php

        if ( isset( $_POST['submit'] ) ){

            global $wpdb;


            $tablename=$wpdb->prefix.'wp_options';

            $data=array(
                'option_name' => $_POST['box-name'], 
                'option_value' => 'true'
            );


            $wpdb->insert( $tablename, $data);
        }

        ?>
        
        </body>
        </html>
//jfjfjhf
