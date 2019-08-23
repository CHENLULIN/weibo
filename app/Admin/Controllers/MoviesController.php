<?php

namespace App\Admin\Controllers;

use App\Models\Movie;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MoviesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '电视剧';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Movie);

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('open_song', __('Open song'));
        $grid->column('ji_shu', __('Ji shu'));
        $grid->column('content', __('Content'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(Movie::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('open_song', __('Open song'));
        $show->field('ji_shu', __('Ji shu'));
        $show->field('content', __('Content'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Movie);

        $form->text('title', __('Title'));
        $form->text('open_song', __('Open song'));
        $form->number('ji_shu', __('Ji shu'));
        $form->ueditor('content', __('内容'));

        return $form;
    }
}
