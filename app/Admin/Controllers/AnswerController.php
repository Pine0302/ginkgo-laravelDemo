<?php

namespace App\Admin\Controllers;

use App\Answer;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AnswerController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Answer';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Answer());


        $grid->column('id', __('Id'));
        $grid->column('users_id', __('Users id'));
        $grid->column('question_id', __('Question id'));
        $grid->column('question_title', __('Question title'));
        $grid->column('content', __('Content'));
        $grid->column('create_at', __('Create at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Answer::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('users_id', __('Users id'));
        $show->field('question_id', __('Question id'));
        $show->field('question_title', __('Question title'));
        $show->field('content', __('Content'));
        $show->field('create_at', __('Create at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Answer());

        $form->number('users_id', __('Users id'));
        $form->number('question_id', __('Question id'));
        $form->textarea('question_title', __('Question title'));
        $form->textarea('content', __('Content'));
        $form->datetime('create_at', __('Create at'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
