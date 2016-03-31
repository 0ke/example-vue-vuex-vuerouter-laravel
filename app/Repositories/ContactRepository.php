<?php
namespace App\Repositories;

class ContactRepository extends SeoRepository
{
    public function inbox()
    {
        $result = (\Session::get('messageIsAnswered', 'onbeantwoord') == 'onbeantwoord') ? 0 : 1;
        return $this->orderBy('cmessage', 'created_at', 'desc')->where('answered', '=', $result)->get(['id', 'name', 'subject', 'message', 'created_at']);
    }

    public function storeMessage($input)
    {
        return $this->contactmessage->create($input);
    }

    public function updateMessage($id, $answer)
    {
        $message = $this->findById($id, 'cmessage');
        $message->update(['answer' => $answer, 'answered' => true]);
        return $message;
    }

    public function wasRead($id)
    {
        $message = $this->findById($id, 'cmessage');

        if (!$message->read) {
            $message->update(['read' => true]);
        }
        return $message;
    }

    public function deleteMessage($id)
    {
        $message = $this->findById($id, 'cmessage')->delete();
    }

}
