<?php namespace Halo;
use Halo\Helper\HeaderOrder;
use Halo\Service\UserService;


/**
 * Created by PhpStorm.
 * User: Maile
 * Date: 17.09.14
 * Time: 18:19
 */
class users extends Controller
{
    public $requires_auth = true;
    /**
     * @var UserService
     */
    protected $userService;

    public function __construct(){
        $this->userService = new UserService();
    }

    function index()
    {
        $this->headerOrder = new HeaderOrder('users', $_GET);
        $this->users = $this->userService->getUsers($_GET);

    }

    function view()
    {
        $user_id = $this->params[0];
        if (empty($user_id))
            error_out('Check user ID in address bar');
        $this->user = get_first("SELECT * FROM users WHERE user_id = '$user_id'");

    }

    function index_post()
    {
        $data = $_POST['data'];

        $data['active'] = isset($data['active']) ? 1 : 0;
        $user_id = insert('users', $data);
        header('Location: ' . BASE_URL . 'users/view/' . $user_id);
    }

    function edit_post()
    {
        $data = $_POST['data'];
        $data['user_id'] = $this->params[0];
        $data['active'] = isset($data['active']) ? 1 : 0;
        insert('users', $data);
        header('Location: ' . BASE_URL . 'users/view/' . $this->params[0]);
    }

    function delete_post()
    {
        $user_id = $_POST['user_id'];
        update('users', ['deleted' => '1'], "user_id = '$user_id'");
        exit("1");
    }

    function edit()
    {
        $user_id = $this->params[0];
        $this->user = get_first("SELECT * FROM users WHERE user_id = '$user_id'");
    }

} 