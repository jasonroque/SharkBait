<div class="col-md-6">
<h2>Stories will be discovered.</h2>

<p>Our philosophy is that our customers make the bar and grill.  Stories are always told throughout the bar and we would like to share it with the world!</p>
<p>Read stories or even submit one of your own!</p>


<div class="btn-group" role="group">
    <button type="button" class="btn btn-lg btn-primary">The Stories</button>
    <button type="button" class="btn btn-lg btn-primary">Submit a Story</button>
</div>
</div>

<div class="col-md-6">
    <div class="panel panel-default">
				<div class="panel-heading"><h4>Share your story</h4></div>
				<div class="panel-body">
                                    <?php 
                                    session_start();
                                    if(!isset($_SESSION['success']) || $_SESSION['success'] == '') { 
                                        if(isset($_SESSION['fail']) && $_SESSION['fail'] != '') { ?>
                                            <div class="alert alert-danger"><?php echo $_SESSION['fail']; ?></div>
                                        <?php } ?>
                                        <form action="/includes/stories_submit.php" method="post" id="story_form" name="story_form">		
<!--						<label class="sr-only">Email</label>
                                                <input class="form-control" type="text" name="email" id="email" placeholder="Enter your email" />-->
						<label class="sr-only">Author</label>
                                                <input class="form-control" type='text' name='author' id='author' placeholder="Author Name" 
                                                       value="<?php if(isset($_GET['author']) || $_GET['author'] != '') { echo $_GET['author']; }?>"/>
						<hr>
						<label class="sr-only">Title</label>
                                                <input class="form-control" type="text" name="title" id="title" placeholder="Title"
                                                       value="<?php if(isset($_POST['title']) || $_POST['title'] != '') { echo $_POST['title']; }?>"/>
                                                <textarea name="body" form="story_form" cols="50" placeholder="Write your story here..."><?php if(isset($_POST['body']) || $_POST['body'] != '') { echo $_POST['body']; }?></textarea>
                                                <br/>
						<input type="submit" value="Submit" class="btn btn-primary pull-left" />
                                                <input type="reset" value="Reset" class="btn btn-danger pull-right" />
					</form>
                                    <?php  
                                        
                                    } else { ?>
                                        <div class="alert alert-success"><?php echo $_SESSION['success'] ?></div>
                                        <?php $_SESSION['success'] = '';
                                     } ?>
				</div>
			</div>

</div>

<?php 
    $query = "SELECT * FROM stories WHERE approved = 0";
    
    if(!$result = $mysqli->query($query)) {
        echo $mysqli->error;
    }
?>


<div class="container">
    <div class="col-md-10">
        <?php 
            while ($row = $result->fetch_assoc()) {
                $id = $row{'id'};
                $title = $row{'title'};
                $author = $row{'body'};
                $body = $row{'body'};
                
                echo '<div class="col-md-4">' .$id . ' ' . $title . ' ' . $author . ' ' . $body . '</div>';
            }
        ?>
    </div>
</div>