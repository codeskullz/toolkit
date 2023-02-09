<?php namespace NielsVanDenDries\Toolkit\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Sales Backend Controller
 *
 * @link https://docs.octobercms.com/3.x/extend/system/controllers.html
 */
class Sales extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
    ];

    /**
     * @var string formConfig file
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string listConfig file
     */
    public $listConfig = 'config_list.yaml';

    /**
     * @var array required permissions
     */
    public $requiredPermissions = ['NielsVanDenDries.toolkit.sales'];

    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('NielsVanDenDries.Toolkit', 'toolkit', 'sales');
    }
}
