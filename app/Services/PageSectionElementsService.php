<?php

namespace App\Services;

use App\Models\Backend\Page\PageSection;
use App\Models\Backend\Page\PageSectionElement;
use Yajra\DataTables\DataTables;


class PageSectionElementsService {

    protected object $model;

    public function __construct(DataTables $dataTables)
    {
        $this->model            = new PageSectionElement();
    }

    public function syncSectionElements($request,$data)
    {
        if($data['section_name'] == 'faq') {
            $faq_num   = $request['list_number_1'];
            for ($i=0;$i<$faq_num;$i++){
//                    $subheading  =  array_key_exists($i, $request->input('subtitle')) ? $request->input('subtitle')[$i] : null;
                $heading     =  array_key_exists($i, $request->input('title')) ? $request->input('title')[$i] : null;

                $data=[
                    'page_section_id'     => $data['section_id'],
                    'title'               => $heading,
                    'list_title'          => $request['list_title'][$i],
                    'list_description'    => $request['list_description'][$i],
                    'status'              => $request['status'],
                    'created_by'          => $request['created_by'],
                ];
                $this->model->create($data);
            }
        }
        elseif ($data['section_name'] == 'flash_card'){
            $flash_card_num   = $request['list_number_1'];
            for ($i=0;$i<$flash_card_num;$i++){
                $heading     =  array_key_exists($i, $request->input('title')) ? $request->input('title')[$i] : null;
                $subheading  =  array_key_exists($i, $request->input('subtitle')) ? $request->input('subtitle')[$i] : null;

                $data=[
                    'page_section_id'     => $data['section_id'],
                    'title'               => $heading,
                    'subtitle'            => $subheading,
                    'list_title'          => $request['list_title'][$i],
                    'list_description'    => $request['list_description'][$i],
                    'status'              => $request['status'],
                    'created_by'          => $request['created_by'],
                ];
                $this->model->create($data);
            }
        }
        else{
            if ($request->hasFile('image_input')) {
                $image_name = $this->uploadImage($request->file('image_input'), '550','450');
                $request->request->add(['image' => $image_name]);
            }
            $this->model->create($request->all());
        }
    }

    public function updateMultipleSectionElements($request,$data){
        if($data['section_name'] == 'faq') {
            $faq_num                    = $request['list_number_1'];
            $faq_section                = PageSection::find($data['section_id']);
            $faq_section_elements_id    = $faq_section->pageSectionElements->pluck('id')->toArray();
            for ($i=0;$i<$faq_num;$i++){
                $heading     =  array_key_exists($i, $request->input('title')) ? $request->input('title')[$i] : null;
//                    $subheading  =  array_key_exists($i, $request->input('subtitle')) ? $request->input('subtitle')[$i] : null;

                $data=[
                    'page_section_id'     => $data['section_id'],
                    'title'               => $heading,
                    'list_title'          => $request['list_title'][$i],
                    'list_description'    => $request['list_description'][$i],
                    'status'              => $request['status'],
                ];

                if($request['id'][$i]){
                    $data['updated_by'] = $request['updated_by'];
                    $this->model->find($request['id'][$i])->update($data);
                }else{
                    $data['created_by'] = $request['created_by'];
                    $this->model->create($data);
                }
            }
            foreach ($faq_section_elements_id as $value){
                if(!in_array($value,$request->input('id'))){
                    $this->model->find($value)->forceDelete();
                }
            }
        }
        else if($data['section_name'] == 'flash_card'){
            $flash_card_num   = $request['list_number_1'];
            for ($i=0;$i<$flash_card_num;$i++){
                $heading     =  array_key_exists($i, $request->input('title')) ? $request->input('title')[$i] : null;
                $subheading  =  array_key_exists($i, $request->input('subtitle')) ? $request->input('subtitle')[$i] : null;
                $data=[
                    'page_section_id'     => $data['section_id'],
                    'title'               => $heading,
                    'subtitle'            => $subheading,
                    'list_title'          => $request['list_title'][$i],
                    'list_description'    => $request['list_description'][$i],
                    'status'              => $request['status'],
                    'updated_by'          => $request['updated_by'],
                ];
                $this->model->find($request['id'][$i])->update($data);
            }

        }

    }


}
