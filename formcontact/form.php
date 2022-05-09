        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <title>Document</title>
        </head>
        <body>
            
        </body>
        </html>
        <?php
        /**
         * Plugin Name: Contact-Zaicha
         */

        function contact_form()
        {
            $content = '';
            $content .= '<h2>Contact Us!</h2>';
        $content .= '<form method="POST" action="#">';


        if (get_option("name") ==1){
            $content .= '<label for="Your Name">Your Name</label>';
            $content .= '<input type ="text" name="Your_Name" class= "form-control" placeholder="Enter Your Name "/>';
            }


        if(get_option("email") ==1) {
            $content .= '<label for="Your Email"> Your Email </label>';
            $content .= '<input type ="email" name="YourEmail" class="form-control" placeholder="Enter Your Email"/>';
        }
        
            if(get_option("number") ==1){
            $content .= '<label for="Your Phone Number">Your Phone Number </label>';
            $content .= '<input type ="tél" name="Number" class="form-control" placeholder="Enter Your Phone Number"/>';
            } 


            if(get_option("Comments") ==1){
            $content .= '<label for="Your Questions Or Your Comments">Your Questions Or Your Comments </label>';
            $content .= '<textarea name="Your_Comments" placeholder="Your Questions Or Your Comments" class="form-control"></textarea>';
            }
            

            $content .= '<br/><input type="submit" name="edit_form" class="btn btn-dark" value="Submit" />';


        
        $content .= '</form>';    
            
            
        
            return $content;

        }
        add_shortcode('plugin_contact','contact_form');

        if (isset($_POST['edit_form'])) {
            $YourName = $_POST['Your_Name'];
            $YourEmail = $_POST['YourEmail'];
            // $YourPhoneNumber = $_POST['Your_Phone_Number'];
            
            // $YourQuestions= $_POST['Your_Comments'];

            //table name: 'formcontact'
            global $wpdb;
             $wpdb->insert('formcontact', array('Name' => $YourName, 'Email' => $YourEmail, 'Number' => $_POST['Number'], 'Comments' => $_POST['Your_Comments']  ));
        }

        function wporg_options_page() {
            add_menu_page(
                'Contact_form',
                'Contact form ',
                'manage_options',
                plugin_dir_path(__FILE__) . 'admin/admin.php',
                null,
                'dashicons-forms',
                100
            );

            //add_submenu_page( string $parent_slug, string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '', int $position = null )
        }
        //admin settings options
        add_action( 'admin_menu', 'wporg_options_page' );



        ?>
//form-contact
