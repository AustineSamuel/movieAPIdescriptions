<?php
$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://api.themoviedb.org/3/movie/550?api_key=551091bd31aa0a91a3f3128e53bbd3ef",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$data=[];
if ($err) {
	echo "cURL Error #:" . $err;
} else {
	$data=json_decode($response);
}
//echo json_encode($data);
echo "<h1>here is the API i could fetch from. becouse most of the Movie APIs keys are not free</h1>scroll to down";

print_r($data);
echo "<h1 style='text-align:center'>Data Explained here</h1>";
echo "<br><br>";
/* */
echo "video homepage ulr : <a href='".$data->homepage."'>".$data->homepage."</a><br><br>";
echo "video backDrop url: ".$data->backdrop_path."<br><br>";
echo "video budget : ".$data->budget."<br><br>";
echo "video id : ".$data->id."<br><br>";
echo "video Original Language : ".$data->original_language."<br><br>";
echo "Video original title: ".$data->original_title."<br><br>";
echo "Video Overview: <b>".$data->overview."</b><br><br>";
echo "Video popularity: ".$data-> popularity."<br><br>";
echo "Video poster image link: ".$data->poster_path ."<br><br>";
echo "Video release date: ".$data->release_date ."<br><br>";
echo "Video language spoken: ".$data->spoken_languages[0]->name."<br><br>";
echo "<br><br>no designs or html. but only the video infomations are return in this API .. bcs is not paid API .. the active Video API keys are not free thats why";

