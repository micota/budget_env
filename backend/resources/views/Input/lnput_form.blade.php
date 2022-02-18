<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>見積入力</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
</head>
<body>
    <form class="form-signin" method="POST" action="{{ route('lnput') }}">
    @csrf
        <h1 class="h3 mb-3 fw-normal">ログイン</h1>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <input id="v_quotation_no" type="text" class="form-control" name="v_quotation_no">
        <input id="v_pattern_no" type="text" class="form-control" name="v_pattern_no">
        <input id="v_project_title" type="text" class="form-control" name="v_project_title">
        <input id="v_client_id" type="text" class="form-control" name="v_client_id">
        <input id="v_client_name" type="text" class="form-control" name="v_client_name">
        <input id="v_department_name" type="text" class="form-control" name="v_department_name">
        <input id="v_salesman_id" type="text" class="form-control" name="v_salesman_id">
        <input id="v_service_category" type="text" class="form-control" name="v_service_category">
        <input id="d_delivery_date" type="text" class="form-control" name="d_delivery_date">
        <input id="d_submit_date" type="text" class="form-control" name="d_submit_date">
        <input id="v_memo" type="text" class="form-control" name="v_memo">
        <input id="v_company_name1" type="text" class="form-control" name="v_company_name1">
        <input id="v_company_name2" type="text" class="form-control" name="v_company_name2">
        <input id="v_company_name3" type="text" class="form-control" name="v_company_name3">
        // 製品情報
        <input id="v_product_name1" type="text" class="form-control" name="v_product_name1">
        <input id="v_product_name2" type="text" class="form-control" name="v_product_name2">
        <input id="v_product_category" type="text" class="form-control" name="v_product_category">
        <input id="v_process_pattern" type="text" class="form-control" name="v_process_pattern">
        <input id="v_product_id" type="text" class="form-control" name="v_product_id">
        <input id="v_product_image" type="text" class="form-control" name="v_product_image">
        <input id="i_quantity" type="text" class="form-control" name="i_quantity" >
        <input id="v_unit" type="text" class="form-control" name="v_unit" >
        <input id="v_single_double" type="text" class="form-control" name="v_single_double" >
        <input id="i_front_color" type="text" class="form-control" name="i_front_color" >
        <input id="i_back_color" type="text" class="form-control" name="i_back_color" >
        <input id="v_finish_size" type="text" class="form-control" name="v_finish_size" >
        <input id="i_finish_size_w" type="text" class="form-control" name="i_finish_size_w" >
        <input id="i_finish_size_l" type="text" class="form-control" name="i_finish_size_l" >
        <input id="i_fiish_size_h" type="text" class="form-control" name="i_fiish_size_h" >
        <input id="v_deploy_size" type="text" class="form-control" name="v_deploy_size" >
        <input id="i_deploy_size_w" type="text" class="form-control" name="i_deploy_size_w" >
        <input id="i_deploy_size_l" type="text" class="form-control" name="i_deploy_size_l" >
        <input id="i_deploy_size_h" type="text" class="form-control" name="i_deploy_size_h" >
        // 用紙情報
        <input id="v_paper_type" type="text" class="form-control" name="v_paper_type" >
        <input id="v_paper_brand" type="text" class="form-control" name="v_paper_brand" >
        <input id="v_paper_size" type="text" class="form-control" name="v_paper_size" >
        <input id="i_paper_ream" type="text" class="form-control" name="i_paper_ream" >
        <input id="i_paper_order_unit" type="text" class="form-control" name="i_paper_order_unit" >
        <input id="i_paper_price" type="text" class="form-control" name="i_paper_price" >
        <input id="i_paper_sell_price" type="text" class="form-control" name="i_paper_sell_price" >
        // 印刷・加工情報
        <input id="i_order_print" type="text" class="form-control" name="i_order_print" >
        <input id="v_machine_name" type="text" class="form-control" name="v_machine_name" >
        <input id="v_imposition_image" type="text" class="form-control" name="v_imposition_image" >
        <input id="i_imposition" type="text" class="form-control" name="i_imposition" >
        <input id="v_single_double_c800" type="text" class="form-control" name="v_single_double_c800" >
        <input id="i_color_c800" type="text" class="form-control" name="i_color_c800" >
        <input id="i_punch_p7100" type="checkbox" class="form-control" name="i_punch_p7100" >
        <input id="i_stable_p7100" type="checkbox" class="form-control" name="i_stable_p7100" >
        <input id="i_stitch_p7100" type="checkbox" class="form-control" name="i_stitch_p7100" >
        <input id="v_color_type_p7100" type="text" class="form-control" name="v_color_type_p7100" >
        <input id="v_fold_type_p7100" type="text" class="form-control" name="v_fold_type_p7100" >
        <input id="v_size_p7100" type="text" class="form-control" name="v_size_p7100" >
        <input id="v_single_double_p7100" type="text" class="form-control" name="v_single_double_p7100" >
        <input id="v_size_s9050" type="text" class="form-control" name="v_size_s9050" >
        <input id="v_paper_type_2468" type="text" class="form-control" name="v_paper_type_2468" >
        <input id="v_ink_type_2468" type="text" class="form-control" name="v_ink_type_2468" >
        <input id="i_color_2468" type="text" class="form-control" name="i_color_2468" >
        <input id="i_color_sp_2468" type="text" class="form-control" name="i_color_sp_2468" >
        <input id="v_solid_area_2468" type="text" class="form-control" name="v_solid_area_2468" >
        <input id="v_solid_color_2468" type="text" class="form-control" name="v_solid_color_2468" >
        <input id="v_paper_type_7" type="text" class="form-control" name="v_paper_type_7" >
        <input id="v_ink_type_7" type="text" class="form-control" name="v_ink_type_7" >
        <input id="v_color_7" type="text" class="form-control" name="v_color_7" >
        <input id="v_color_sp_7" type="text" class="form-control" name="v_color_sp_7" >
        <input id="v_solid_area_7" type="text" class="form-control" name="v_solid_area_7" >
        <input id="v_solid_color_7" type="text" class="form-control" name="v_solid_color_7" >
        <input id="v_uv_type_7" type="text" class="form-control" name="v_uv_type_7" >
        <input id="v_uv_area_7" type="text" class="form-control" name="v_uv_area_7" >
        <input id="v_interdeck_7"  type="text" class="form-control" name="v_interdeck_7" >
        <input id="v_size_ctp" type="text" class="form-control" name="v_size_ctp" >
        <input id="v_work_name_ctp" type="text" class="form-control" name="v_work_name_ctp" >
        <input id="v_size_cut1" type="text" class="form-control" name="v_size_cut1" >
        <input id="i_packag_pack" type="radio" class="form-control" name="i_packag_pack" >
        <input id="i_collating_pack" type="radio" class="form-control" name="i_collating_pack" >
        <input id="i_saddle_pack" type="text" class="form-control" name="i_saddle_pack" >
        <input id="v_fold_type_line2" type="text" class="form-control" name="v_fold_type_line2" >
        <input id="v_fold_type_fold" type="text" class="form-control" name="v_fold_type_fold" >
        <input id="i_fold_bind" type="checkbox" class="form-control" name="i_fold_bind" >
        <input id="i_cut_bind" type="checkbox" class="form-control" name="i_cut_bind" >
        <input id="i_paste_bind" type="checkbox" class="form-control" name="i_paste_bind" >
        <input id="i_stitch_bind" type="checkbox" class="form-control" name="i_stitch_bind" >
        <input id="i_end_bind" type="checkbox" class="form-control" name="i_end_bind" >
        <input id="i_wrap_bind" type="checkbox" class="form-control" name="i_wrap_bind" >
        <input id="v_paper_type_bind" type="text" class="form-control" name="v_paper_type_bind" >
        <input id="v_direction_bind" type="text" class="form-control" name="v_direction_bind" >
        <input id="i_stripper_ext" type="radio" class="form-control" name="i_stripper_ext" >
        <input id="i_spmaterial_ext" type="radio" class="form-control" name="i_spmaterial_ext" >
        <input id="v_category_ext" type="text" class="form-control" name="v_category_ext" >
        <input id="v_face_ext" type="text" class="form-control" name="v_face_ext" >
        <input id="v_category_mini" type="text" class="form-control" name="v_category_mini" >
        <input id="i_spmaterial_pluck" type="checkbox" class="form-control" name="i_spmaterial_pluck" >
        <input id="i_face_pluck" type="text" class="form-control" name="i_face_pluck" >
        <input id="v_category_gluer" type="text" class="form-control" name="v_category_gluer" >
        <input id="v_type_gluer" type="text" class="form-control" name="v_type_gluer" >
        <input id="v_type_punch" type="text" class="form-control" name="v_type_punch" >
        <input id="i_corner_lami1" type="checkbox" class="form-control" name="i_corner_lami1" >
        <input id="v_size_lami1" type="text" class="form-control" name="v_size_lami1" >
        <input id="v_direction_lami1" type="text" class="form-control" name="v_direction_lami1" >
        <input id="i_corner_lami2" type="checkbox" class="form-control" name="i_corner_lami2" >
        <input id="v_size_lami2" type="text" class="form-control" name="v_size_lami2" >
        <input id="i_yupo_pp" type="checkbox" class="form-control" name="i_yupo_pp" >
        <input id="i_mat_pp" type="checkbox" class="form-control" name="i_mat_pp" >
        <input id="v_size_pp" type="text" class="form-control" name="v_size_pp" >
        <input id="v_pack_type_pack" type="text" class="form-control" name="v_pack_type_pack" >
        <input id="v_pack_size_pack" type="text" class="form-control" name="v_pack_size_pack" >
        <input id="i_work_size_packman" type="text" class="form-control" name="i_work_size_packman" >
        <input id="v_film_width_packman" type="text" class="form-control" name="v_film_width_packman" >
        <input id="i_check1" type="checkbbox" class="form-control" name="i_check1" >
        <input id="i_check2" type="checkbbox" class="form-control" name="i_check2" >
        <input id="i_check3" type="checkbbox" class="form-control" name="i_check3" >
        <input id="i_check4" type="checkbbox" class="form-control" name="i_check4" >
        <input id="i_check5" type="checkbbox" class="form-control" name="i_check5" >
        <input id="i_check6" type="checkbbox" class="form-control" name="i_check6" >
        <input id="i_quantity_diecutting" type="text" class="form-control" name="i_quantity_diecutting" >
        <input id="v_oprocess_name" type="text" class="form-control" name="v_oprocess_name" >
        <input id="i_oprocess_quantity" type="text" class="form-control" name="i_oprocess_quantity" >
        <input id="i_oprocess_unitprice" type="text" class="form-control" name="i_oprocess_unitprice" >
        <input id="i_oprocess_amount" type="text" class="form-control" name="i_oprocess_amount" >
        // その他費用
        <input id="v_oitem_name" type="text" class="form-control" name="v_oitem_name" >
        <input id="i_oitem_amount" type="text" class="form-control" name="i_oitem_amount" >


        <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
    </form>
    
</body>
</html>