<?php

session_start();

if(!isset($_SESSION['user'])) {
header('location: login.php');
exit();
}

?>



<?php

      ini_set('max_execution_time', 3000);
	  ini_set('memory_limit', '256M');
	  
      include 'database.php';
	  



?>






<?php


     if(isset($_POST['submit'])){ echo 'ffffffffffff';

         if( !empty($_FILES['pic1']['tmp_name']) && !empty($_FILES['pic2']['tmp_name']) && !empty($_FILES['pic3']['tmp_name']) )
	     {
 
          
		  echo 'dddddddddddddd';
		  
		  define('GW_UPLOADPATH','image/');


          $nam = $_GET['nam'];
		
		
		
		$pic_type=$_FILES['pic1']['type'];
			   if( $pic_type=='image/png' )
			     { $ext = '.png'; }
			   if( $pic_type=='image/gif' )
				 { $ext = '.gif'; }
			   if( $pic_type=='image/jpg' )
				 { $ext = '.jpg'; }
			   if( $pic_type=='image/jpeg' )
				 { $ext = '.jpg'; }	 	 	 	    
			   $pic1 = $nam.'1'.$ext;
			   $target = GW_UPLOADPATH.$pic1;
			   move_uploaded_file($_FILES['pic1']['tmp_name'],$target);
			   
			   
			   list($width, $height) = getimagesize($target);
		       $dst = imagecreatetruecolor(1000, 750);
		       if( $pic_type=='image/png' )
			     { $src = imagecreatefrompng($target);  }
			   if( $pic_type=='image/jif' )
			     { $src = imagecreatefromgif($target);  }
			   if( $pic_type=='image/jpg' )
			     { $src = imagecreatefromjpeg($target);  }
			   if( $pic_type=='image/jpeg' )
			     { $src = imagecreatefromjpeg($target);  }	   
		       	imagecopyresampled($dst, $src, 0, 0, 0, 0,1000, 750, $width, $height);
		       imagejpeg($dst, $target, 75);
		       imagedestroy($dst);
			   
			   
			   
			   
			   $pic_type=$_FILES['pic2']['type'];
			   if( $pic_type=='image/png' )
			     { $ext = '.png'; }
			   if( $pic_type=='image/gif' )
				 { $ext = '.gif'; }
			   if( $pic_type=='image/jpg' )
				 { $ext = '.jpg'; }
			   if( $pic_type=='image/jpeg' )
				 { $ext = '.jpg'; }	 	 	 	    
			   $pic2 = $nam.'2'.$ext;
			   $target = GW_UPLOADPATH.$pic2;
			   move_uploaded_file($_FILES['pic2']['tmp_name'],$target);
			   
			   
			   list($width, $height) = getimagesize($target);
		       $dst = imagecreatetruecolor(1000, 750);
		       if( $pic_type=='image/png' )
			     { $src = imagecreatefrompng($target);  }
			   if( $pic_type=='image/jif' )
			     { $src = imagecreatefromgif($target);  }
			   if( $pic_type=='image/jpg' )
			     { $src = imagecreatefromjpeg($target);  }
			   if( $pic_type=='image/jpeg' )
			     { $src = imagecreatefromjpeg($target);  }	   
		       	imagecopyresampled($dst, $src, 0, 0, 0, 0,1000, 750, $width, $height);
		       imagejpeg($dst, $target, 75);
		       imagedestroy($dst);
			   
			   
			   
			   $pic_type=$_FILES['pic3']['type'];
			   if( $pic_type=='image/png' )
			     { $ext = '.png'; }
			   if( $pic_type=='image/gif' )
				 { $ext = '.gif'; }
			   if( $pic_type=='image/jpg' )
				 { $ext = '.jpg'; }
			   if( $pic_type=='image/jpeg' )
				 { $ext = '.jpg'; }	 	 	 	    
			   $pic3 = $nam.'3'.$ext;
			   $target = GW_UPLOADPATH.$pic3;
			   move_uploaded_file($_FILES['pic3']['tmp_name'],$target);
			   
			   
			   list($width, $height) = getimagesize($target);
		       $dst = imagecreatetruecolor(1000, 750);
		       if( $pic_type=='image/png' )
			     { $src = imagecreatefrompng($target);  }
			   if( $pic_type=='image/jif' )
			     { $src = imagecreatefromgif($target);  }
			   if( $pic_type=='image/jpg' )
			     { $src = imagecreatefromjpeg($target);  }
			   if( $pic_type=='image/jpeg' )
			     { $src = imagecreatefromjpeg($target);  }	   
		       	imagecopyresampled($dst, $src, 0, 0, 0, 0,1000, 750, $width, $height);
		       imagejpeg($dst, $target, 75);
		       imagedestroy($dst);
			   
			   
			   $query = "UPDATE data123 SET pic1= '$pic1', pic2= '$pic2', pic3= '$pic3'  WHERE nam= '$nam' LIMIT 1";
		 
		        $result = mysqli_query($dbc,$query);	  	 

 
               echo 'updated successfully -->';
 
           }
           else echo 'incomplete form, please go back fill all details';

      }

?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="jwysiwyg/help/lib/blueprint/screen.css" media="screen, projection" />
<link rel="stylesheet" type="text/css" href="jwysiwyg/help/lib/blueprint/print.css" media="print" />
<!--[if lt IE 8]><link rel="stylesheet" href="../lib/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->
<link rel="stylesheet" href="jwysiwyg/jquery.wysiwyg.css" type="text/css"/>
<script type="text/javascript" src="jwysiwyg/help/lib/jquery.js"></script>
<script type="text/javascript" src="jwysiwyg/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="jwysiwyg/controls/wysiwyg.image.js"></script>
<script type="text/javascript" src="jwysiwyg/controls/wysiwyg.link.js"></script>
<script type="text/javascript" src="jwysiwyg/controls/wysiwyg.table.js"></script>
<script type="text/javascript">
(function($) {
	$(document).ready(function() {
		$('#wysiwyg').wysiwyg({
		  controls: {
			bold          : { visible : true },
			italic        : { visible : true },
			underline     : { visible : true },
			strikeThrough : { visible : true },
			
			justifyLeft   : { visible : true },
			justifyCenter : { visible : true },
			justifyRight  : { visible : true },
			justifyFull   : { visible : true },

			indent  : { visible : true },
			outdent : { visible : true },

			subscript   : { visible : true },
			superscript : { visible : true },
			
			undo : { visible : true },
			redo : { visible : true },
			
			insertOrderedList    : { visible : true },
			insertUnorderedList  : { visible : true },
			insertHorizontalRule : { visible : true },

			h4: {
				visible: true,
				className: 'h4',
				command: ($.browser.msie || $.browser.safari) ? 'formatBlock' : 'heading',
				arguments: ($.browser.msie || $.browser.safari) ? '<h4>' : 'h4',
				tags: ['h4'],
				tooltip: 'Header 4'
			},
			h5: {
				visible: true,
				className: 'h5',
				command: ($.browser.msie || $.browser.safari) ? 'formatBlock' : 'heading',
				arguments: ($.browser.msie || $.browser.safari) ? '<h5>' : 'h5',
				tags: ['h5'],
				tooltip: 'Header 5'
			},
			h6: {
				visible: true,
				className: 'h6',
				command: ($.browser.msie || $.browser.safari) ? 'formatBlock' : 'heading',
				arguments: ($.browser.msie || $.browser.safari) ? '<h6>' : 'h6',
				tags: ['h6'],
				tooltip: 'Header 6'
			},
			
			cut   : { visible : true },
			copy  : { visible : true },
			paste : { visible : true },
			html  : { visible: true },
			increaseFontSize : { visible : true },
			decreaseFontSize : { visible : true },
			exam_html: {
				exec: function() {
					this.insertHtml('<abbr title="exam">Jam</abbr>');
					return true;
				},
				visible: true
			}
		  },
		  events: {
			click: function(event) {
				if ($("#click-inform:checked").length > 0) {
					event.preventDefault();
					alert("You have clicked jWysiwyg content!");
				}
			}
		  }
		});

		$('#wysiwyg').wysiwyg("insertHtml", "Sample code");
	});
})(jQuery);
</script>
    
    
    
  </head>
  
  <body>
  
  
  
  
  
       <div class=" jumbotron">
       
                    <div class="container well" style="margin-top: 70px;">
                    
                              
                             <form action="data4.php?nam=<?php echo $nam; ?>" enctype="multipart/form-data" method="post">
                             
                             <h3>Gallery </h3> <br>
                              Pic 4: <input type="file" name="pic4" > <br>
                              Pic 5: <input type="file" name="pic5" > <br>
                              Pic 6: <input type="file" name="pic6" > <br>
	                         
                             
                             <br><br><br><hr>
                             
                             <input type="submit" value="NEXT" name="submit">
                             
                             
                             </form>
       
       
       
                    </div>
       
       </div>
  
  
  
  
  
                   
                   
           
    
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
     
    
    
    
    
    
    
  </body>
</html>