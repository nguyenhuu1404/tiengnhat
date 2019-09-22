<?php

namespace App\Actions;

use TCG\Voyager\Actions\AbstractAction;
use App\Lesson;
use App\Course;

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
        if (!empty($this->data->lesson_id)) {
            $lesson = Lesson::where('id', $this->data->lesson_id)->first();
            $course = $lesson->courses()->first();

            return route('frontend.lesson.detail', [$course->slug, $course->id, $lesson->id, $lesson->slug]);
        }
        if (!empty($this->data->course_id) && $this->data->lesson_id === null) {
            $course = Course::where('id', $this->data->course_id)->first();

            return route('frontend.course.detail', [$course->id, $course->slug]);
        }
    }

    public function shouldActionDisplayOnDataType()
    {
        return $this->dataType->slug == 'comments' && $this->data->parent_id === null;
    }

    public function massAction($ids, $comingFrom)
    {
        // Do something with the IDs
        return redirect($comingFrom);
    }
}