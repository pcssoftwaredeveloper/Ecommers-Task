 public function getCurlRequest($request_url = "", $post_fields=""){

    if(empty($request_url)) {
        return false;
    }

    $apiBaseUrl = "http://localhost/laravel-9/api/";
    $url = $apiBaseUrl.$request_url;
      
     
    $postvars = '';
    foreach($post_fields as $key=>$value) {
        $postvars .= $key . "=" . $value . "&";
    }
        // single array use
        /*$ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
        // execute!
        $response = curl_exec($ch);
        // close the connection, release resources used
        curl_close($ch);
        // do anything you want with your response
        return $response;*/
        // multi 
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$post_fields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        return $server_output = curl_exec($ch);
        curl_close ($ch);
                 
    }

    public function add_edit_api(request $request){
        $curl_url = 'product-add-api.php';
        $prName = $request->post('name');
        $qty = $request->post('qty');
        $image = $request->post('image');
        $desc = $request->post('description');
        $data = ['name'=>$prName,'qty'=>$qty,'image'=>$image,'description'=>$desc];
        $request = $this->getCurlRequest($curl_url,$data);
        $response = json_decode($request,true); print_r($response); exit;
        if($response['error']==1){
            #$this->session->set_userdata('error',$response['message']);
           print_r($response['message']);exit;
        }else{
            print_r($response['message']);exit;
        }
       
    }