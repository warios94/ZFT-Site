<?php

class chat{
    public function getChatID(){
        return $this->ChatID;
    }
    public function setChatID($ChatID){
        $this->ChatID = $ChatID;
    }

    public function getChatUserID(){
        return $this->ChatUserID;
    }
    public function setChatUserID($ChatUserID){
        $this->ChatUserID = $ChatUserID;
    }

    public function getChatID(){
        return $this->ChatText;
    }
    public function setChatID($ChatText){
        $this->ChatText = $ChatText;
    }

}
public function InsertChatMessage(){
    include "conn.php";

    $req=$bdd->prepare("INSERT INT
    chats(ChatUserID, ChatText) VALUES(:ChatUserId,:ChatText)");
  $req->execute(array (

      'ChatUserId'=>$this->getChatUserID(),
      'ChatText'=>$this->getChatText()

  ))
}

?>
