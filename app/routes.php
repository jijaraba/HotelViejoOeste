<?php
/***
 * Home Route
 */
Route::get('/', [
    'as' => 'home',
    'uses' =>  'PagesController@index'
]);
/**
 * Gallery Route
 */
Route::get('/galeria-fotos', [
    'as' => 'pages.gallery',
    'uses' =>  'PagesController@gallery'
]);
/**
 * Cabin Route
 */
Route::get('/cabanas-tematicas', [
    'as' => 'cabins.index',
    'uses' =>  'CabinsController@index'
]);
Route::get('/cabin/{slug}', [
    'as' => 'cabins.slug',
    'uses' =>  'CabinsController@getbyslug'
]);
/**
 * ViejoOeste Route
 */
Route::get('/viejooeste-en-doradal', [
    'as' => 'pages.viejooeste',
    'uses' => 'PagesController@viejooeste'
]);
/**
 * Contact Route
 */
Route::get('/contacto', [
   'as' => 'pages.contact',
    'uses' => 'PagesController@contact'
]);
/**
 * Location Route
 */
Route::get('/localizacion', [
    'as' => 'pages.location',
    'uses' => 'PagesController@location'
]);
/**
 * Booking Route
 */
Route::get('/reservas', [
    'as' => 'pages.booking',
    'uses' => 'CabinsController@index' //Pendiente Corregir
]);
/**
 * Convenios
 */
Route::get('/convenios', [
    'as' => 'pages.convenios',
    'uses' => 'PagesController@convenios'
]);
/**
 * Blog Route
 */
Route::get('/blog', [
    'as' => 'pages.blog',
    'uses' => 'PagesController@blog'
]);
/**
 * Email Route
 */
Route::post('email', array('before' => 'csrf', function ()
{
    $input =  Input::all();

    $data = array(
        'subject'=> $input['viejooeste-form-subject'],
        'name'  => $input['viejooeste-form-name'],
        'detail'  => $input['viejooeste-form-detail'],
        'email' => $input['viejooeste-form-email'],
        'phone' => $input['viejooeste-form-phone']
    );

    /**
     * Formulario de Contacto
     */
    $contact = array(
        'email'=> 'info@hotelviejooeste.com',
        'name'=> 'Reservas',
        'subject'=> $input['viejooeste-form-subject']
    );
    Mail::queue('emails.contact', $data, function($message) use ($contact)
    {
        $message->from('info@hotelviejooeste.com', 'Solicitud de Información');
        $message->to($contact['email'], $contact['name'])->subject($contact['subject']);
    });

    /**
     * Respuesta Cliente
     */
    $client = array(
        'email'=> $input['viejooeste-form-email'],
        'name'=> $input['viejooeste-form-name'],
        'subject'=> $input['viejooeste-form-subject']
    );
    Mail::queue('emails.client', $data, function($message) use ($client)
    {
        $message->from('info@hotelviejooeste.com', 'Hotel Viejo Oeste');
        $message->to($client['email'], $client['name'])->subject($client['subject']);
    });

    return Redirect::to('/contacto?send=1#form')->
    with('alert_success',"Formulario enviado. Muy pronto nos estaremos comunicando con usted");
}));


/**
 * ===================================
 * API V1.0
 * ===================================
 */

Route::group(array('prefix'=>'api/v1'), function() {


    /**
     * ===================================
     * Cabins
     * ===================================
     */
    //Get Cabin By Slug
    Route::get('/cabins/getbyslug/{token}',[
        'as' => 'api.v1.cabins.getbyslug',
        'uses' => 'CabinsController@getbyslug'
    ]);
    /**
     * ===================================
     * Cabins
     * ===================================
     */
    Route::resource('plans', 'PlansController');

});