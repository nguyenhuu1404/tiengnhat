<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;

class AnswerAction extends AbstractAction
{
    public function getTitle()
    {
        return 'Answers ';
    }

    public function getIcon()
    {
        return 'voyager-eye';
    }

    public function getPolicy()
    {
        return 'read';
    }

    public function getAttributes()
    {
        return [
            'class' => 'btn btn-sm btn-primary pull-right',
            'target' => '_blank'
        ];
    }

    public function getDefaultRoute()
    {
        return route('comment.answer', $this->data->id);
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'comments';
    }

    public function massAction($ids, $comingFrom)
    {
        // Do something with the IDs
        return redirect($comingFrom);
    }
}