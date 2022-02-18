<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InputFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    // 手入力項目のみバリデーションをかける
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // ヘッダ部分(基本情報?)
            'v_project_title' => 'nullable|string|size:50',
            'v_client_id' => 'nullable|regrex:/^\d{5}-{1}\d{4}$/',
            'v_client_name' => 'nullable|string|size:30',
            'v_department_name' => 'nullable|string|size:30',
            'v_salesman_id' => 'nullable|string|size:10',
            'v_salesman_name' => 'nullable|string|size:30',
            'd_delivery_date' => 'nullable|date',
            'd_submit_date' => 'nullable|date',
            'v_memo' => 'nullable|string|size:100',
            'v_company_name1' => 'nullable|string|size:30',
            'v_company_name2' => 'nullable|string|size:30',
            'v_company_name3' => 'nullable|string|size:30',
            // 製品情報
            'v_product_name1' => 'nullable|string|size:50',
            'v_product_name2' => 'nullable|string|size:50',
            'i_detail_no' => 'nullable|digits:2',
            'v_product_id' => 'nullable|digits:7',
            'v_product_image' => 'nullable|string',
            'i_quantity' => 'nullable',
            'i_front_color' => 'nullable',
            'i_back_color' => 'nullable',
            'v_finish_size' => 'nullable',
            'v_deploy_size' => 'nullable',
            // 用紙情報
            'i_paper_ream' => 'nullable',
            'i_paper_order_unit' => 'nullable',
            'i_paper_price' => 'nullable',
            'i_paper_sell_price' => 'nullable',
            'i_paper_quantity' => 'nullable',
            'i_print_reserve_quantity' => 'nullable',
            'i_process_reserve_quantity' => 'nullable',
            'i_paper_total_quantity' => 'nullable',
            'i_paper_total_amount' => 'nullable',
            // 印刷・加工情報
            'i_order_print' => 'nullable',
            'v_imposition_image' => 'nullable',
            'i_imposition' => 'nullable',
            'v_single_double_c800' => 'nullable',
            'i_color_c800' => 'nullable',
            'i_punch_p7100' => 'nullable',
            'i_stable_p7100' => 'nullable',
            'i_stitch_p7100' => 'nullable',
            'v_single_double_p7100' => 'nullable',
            'v_size_s9050' => 'nullable',
            'v_paper_type_2468' => 'nullable',
            'v_ink_type_2468' => 'nullable',
            'i_color_2468' => 'nullable',
            'i_color_sp_2468' => 'nullable',
            'v_solid_area_2468' => 'nullable',
            'v_solid_color_2468' => 'nullable',
            'v_paper_type_7' => 'nullable',
            'v_ink_type_7' => 'nullable',
            'v_color_7' => 'nullable',
            'v_color_sp_7' => 'nullable',
            'v_solid_area_7' => 'nullable',
            'v_solid_color_7' => 'nullable',
            'v_uv_type_7' => 'nullable',
            'v_uv_area_7' => 'nullable',
            'v_interdeck_7' => 'nullable',
            'v_size_ctp' => 'nullable',
            'v_work_name_ctp' => 'nullable',
            'v_size_cut1' => 'nullable',
            'i_packag_pack' => 'nullable',
            'i_collating_pack' => 'nullable',
            'i_saddle_pack' => 'nullable',
            'v_fold_type_line2' => 'nullable',
            'v_fold_type_fold' => 'nullable',
            'i_fold_bind' => 'nullable',
            'i_cut_bind' => 'nullable',
            'i_paste_bind' => 'nullable',
            'i_stitch_bind' => 'nullable',
            'i_end_bind' => 'nullable',
            'i_wrap_bind' => 'nullable',
            'v_paper_type_bind' => 'nullable',
            'v_direction_bind' => 'nullable',
            'i_stripper_ext' => 'nullable',
            'i_spmaterial_ext' => 'nullable',
            'v_category_ext' => 'nullable',
            'v_face_ext' => 'nullable',
            'v_category_mini' => 'nullable',
            'i_spmaterial_pluck' => 'nullable',
            'i_face_pluck' => 'nullable',
            'v_category_gluer' => 'nullable',
            'v_type_gluer' => 'nullable',
            'v_type_punch' => 'nullable',
            'i_corner_lami1' => 'nullable',
            'v_size_lami1' => 'nullable',
            'v_direction_lami1' => 'nullable',
            'i_corner_lami2' => 'nullable',
            'v_size_lami2' => 'nullable',
            'i_yupo_pp' => 'nullable',
            'i_mat_pp' => 'nullable',
            'v_size_pp' => 'nullable',
            'v_pack_type_pack' => 'nullable',
            'v_pack_size_pack' => 'nullable',
            'i_work_size_packman' => 'nullable',
            'v_film_width_packman' => 'nullable',
            'i_check1' => 'nullable',
            'i_check2' => 'nullable',
            'i_check3' => 'nullable',
            'i_check4' => 'nullable',
            'i_check5' => 'nullable',
            'i_check6' => 'nullable',
            'i_quantity_diecutting' => 'nullable',
            'v_oprocess_name' => 'nullable',
            'i_oprocess_quantity' => 'nullable',
            'i_oprocess_unitprice' => 'nullable',
            'i_oprocess_amount' => 'nullable',
            // その他費用
            'v_oitem_name' => 'nullable',
            'i_oitem_amount' => 'nullable',
        ];
    }
}
