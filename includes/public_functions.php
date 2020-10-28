<?php 

function getPublishedPosts() {
	try
	{
		global $conn;
		$sql = "SELECT * FROM posts WHERE published=true";
		$result = mysqli_query($conn, $sql);
		$final_posts = array();
		for($i=0;$i<mysqli_num_rows($result);$i++){
			$row = mysqli_fetch_array($result);
			$row['topic'] = getPostTopic($row['id']);
			array_push($final_posts, $row);
		}
		return $final_posts;
	}
	catch (Exception $e) {
		return $e->getMessage();
	}
}
/* * * * * * * * * * * * * * *
* Receives a post id and
* Returns topic of the post
* * * * * * * * * * * * * * */
function getPostTopic($post_id){
	global $conn;
	$sql = "SELECT * FROM topics WHERE id=
			(SELECT topic_id FROM post_topic WHERE post_id=$post_id) LIMIT 1";
	$result = mysqli_query($conn, $sql);
	$topic = mysqli_fetch_array($result);
	return $topic;
}



/* * * * * * * * * * * * * * * *
* Returns all posts under a topic
* * * * * * * * * * * * * * * * */
function getPublishedPostsByTopic($topic_id) {
	global $conn;
	$sql = "SELECT * FROM posts ps 
			WHERE ps.id IN 
			(SELECT pt.post_id FROM post_topic pt 
				WHERE pt.topic_id=$topic_id GROUP BY pt.post_id 
				HAVING COUNT(1) = 1)";
	$result = mysqli_query($conn, $sql);
	$final_posts = array();
	for($i=0;$i<mysqli_num_rows($result);$i++){
		$row = mysqli_fetch_array($result);
		$row['topic'] = getPostTopic($row['id']); 
		array_push($final_posts, $row);
	}
	return $final_posts;
}
/* * * * * * * * * * * * * * * *
* Returns topic name by topic id
* * * * * * * * * * * * * * * * */
function getTopicNameById($id)
{
	global $conn;
	$sql = "SELECT name FROM topics WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	$topic = mysqli_fetch_array($result);
	return $topic['name'];
}

/* * * * * * * * * * * * * * *
* Returns a single post
* * * * * * * * * * * * * * */
function getPost($id){
	global $conn;
	// Get single post slug
	$sql = "SELECT * FROM posts WHERE id='$id' AND published=true";
	$result = mysqli_query($conn, $sql);

	$post = mysqli_fetch_array($result);
	if ($post) {
		// get the topic to which this post belongs
		$post['topic'] = getPostTopic($post['id']);
	}
	return $post;
}
/* * * * * * * * * * * *
*  Returns all topics
* * * * * * * * * * * * */
function getAllTopics()
{
	global $conn;
	$sql = "SELECT * FROM topics";
	$result = mysqli_query($conn, $sql);
	$final_topics = array();
	for($i=0;$i<mysqli_num_rows($result);$i++){
		array_push($final_topics, mysqli_fetch_array($result));
	}
	return $final_topics;
}




?>