<?php

session_start();

if(!isset($_SESSION['user'])) {
header('location: login.php');
exit();
}

?>



<?php

      ini_set('max_execution_time', 3000);
	  
      include 'database.php';
	  



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
		$('.wysiwyg').wysiwyg({
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
                    
                    
                             <h3><a href="../update.php">Go back to  Update Page</a></h3><br><hr>
                    
                              
                             <form action="data2.php" enctype="multipart/form-data" method="post">
                             
                             <h3>ABOUT US </h3> <br>
                             Name: <input type="text" name="nam"> <br><br>
                             About Us: <textarea class="wysiwyg" rows="5" name="abo" cols="103"></textarea> <br>
                             
                             Status: <select name="sta">
                                        <option value="upcoming">upcoming</option>
                                        <option value="current">current</option>
                                        <option value="completed">completed</option>
                                        <option value="government">government</option>
                                     </select>
                                     
                             <br>
                             
                             BHK avilable: <input type="checkbox" name="bhk[]" value="1 BHK"> 1 BHK  
                                                      <input type="checkbox" name="bhk[]" value="2 BHK"> 2 BHK  
                                                      <input type="checkbox" name="bhk[]" value="3 BHK"> 3 BHK             
                             
                             <br><br><br><hr>
                             
                             <h3>LOCATION </h3> <br>
                             
                             Lattitude: <input type="text" name="lat"> <br>
                             Longitude: <input type="text" name="lon"><br>
                             
                             <br><br><br><hr>
                             
                             <h3>LITTLE DISCRIPTION </h3> <br>
                             
                             Description: <input type="text" name="des" style="height: 120px; width: 600px;"> <br>
                             
                             <br><br><br><hr>
                             
                             <h3>SPECIFICATION </h3> <br>
	                         Specification: <textarea class="wysiwyg" rows="5" name="spe" cols="103"></textarea>
                             
                             <br><br><br><hr>
                             
                             <h3>AMENITIES </h3> <br>
	                         Amenities: <textarea class="wysiwyg" rows="5" name="ame" cols="103"></textarea>
                             
                             <br><br><br><hr>
                             
                             <input type="submit" value="NEXT" name="submit">
                             
                             
                             </form>
       
       
       
                    </div>
       
       </div>
  
  
  
  
  
                   
                   
           
    
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
     
    
    
    
    
    
    
  </body>
</html>