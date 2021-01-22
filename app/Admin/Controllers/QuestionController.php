<?php

namespace App\Admin\Controllers;

use App\Question;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class QuestionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Question';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Question());
        $grid->disableCreateButton();
        $grid->model()->orderBy('id', 'desc');
        $grid->filter(function($filter){
            // 去掉默认的id过滤器
            $filter->disableIdFilter();
            // 在这里添加字段过滤器
            $filter->like('mobile', 'mobile');
        });

        $grid->disableExport();


        $grid->actions(function ($actions) {
            // 去掉删除
            $actions->disableDelete();
            // 去掉编辑
            $actions->disableEdit();
        });

        $grid->column('id', 'ID')->sortable();
        $grid->column('name', "用户名");
        $grid->column('sex', "性别");
        $grid->column('age', "年龄");
        $grid->column('mobile', "手机号");

        $grid->column('isold', '是否老业主')->hide();
        $grid->column('trade', '从事行业');
        $grid->column('area', '居住区域');
        $grid->column('percentage', '年平均旅游频次');
        $grid->column('with_who', '和谁一起度假');
        $grid->column('info_method', '信息渠道');
        $grid->column('concern_factor', '关注因素');
        $grid->column('product_type', '倾向的产品类型');
        $grid->column('area_size', '公寓产品面积');
        $grid->column('house_type', '户型选择');
        $grid->column('house_face', '房间朝向');
        $grid->column('total_price', '总价范围');
        $grid->column('public_space', '公共空间生活配套');
        $grid->column('renovation', '装修情况');
        $grid->column('renovation_style', '精装修风格');
        $grid->column('service_type', '物业服务配套');
        $grid->column('profit_type','产品托管服务');
        $grid->column('morgage_5010', '是否能接受50%首付款，按揭最多十年政策');
        $grid->column('recomend','是否推荐');

        $grid->export(function ($export) {
            $export->filename('Filename');
        });

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
        $show = new Show(Question::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('id', __('Id'));
        $show->field('name', "用户名");
        $show->field('sex', "性别");
        $show->field('age', "年龄");
        $show->field('mobile', "手机号");
        $show->field('area',"居住区域");
        $show->field('isold', "是否老业主");
        $show->field('trade', "从事行业");
        $show->field('percentage', "年平均旅游频次");
        $show->field('with_who', "和谁一起度假");
        $show->field('info_method', "获知度假物业的主要信息渠道是");
        $show->field('concern_factor', "购买本项目最关注哪些因素");
        $show->field('product_type', "比较倾向的产品类型");
        $show->field('area_size', "接受多少面积段的公寓产品");
        $show->field('house_type', "购买本项目您对于户型选择上，更注重哪些方面");
        $show->field('house_face', "对于房间朝向有没有特殊需求");
        $show->field('total_price', "可能接受的总价范围是");
        $show->field('public_space', "对度假型文旅项目园区公共空间生活配套，认为最需要的是");
        $show->field('renovation', "希望入住的度假产品装修情况是");
        $show->field('renovation_style', "精装修风格希望是");
        $show->field('service_type', "在物业服务配套方面，比较重视以下哪种服务");
        $show->field('profit_type', "关于产品托管服务，您更倾向与哪种收益方式");
        $show->field('morgage_5010', "若购买本项目产品，是否能接受50%首付款，按揭最多十年政策");
        $show->field('recomend', "会推荐您的亲朋好友来郡安里，一起分享这种美好的度假生活吗");
        $show->field('create_at', "填写时间");

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Question());

        $form->textarea('name', __('Name'));
        $form->text('sex', __('Sex'));
        $form->text('age', __('Age'));
        $form->mobile('mobile', __('Mobile'));
        $form->text('area', __('Area'));
        $form->text('isold', __('Isold'));
        $form->text('trade', __('Trade'));
        $form->text('percentage', __('Percentage'));
        $form->text('with_who', __('With who'));
        $form->text('info_method', __('Info method'));
        $form->text('concern_factor', __('Concern factor'));
        $form->text('product_type', __('Product type'));
        $form->text('area_size', __('Area size'));
        $form->text('house_type', __('House type'));
        $form->text('house_face', __('House face'));
        $form->text('total_price', __('Total price'));
        $form->textarea('public_space', __('Public space'));
        $form->text('renovation', __('Renovation'));
        $form->text('renovation_style', __('Renovation style'));
        $form->text('service_type', __('Service type'));
        $form->text('profit_type', __('Profit type'));
        $form->text('morgage_5010', __('Morgage 5010'));
        $form->text('recomend', __('Recomend'));

        return $form;
    }
}
