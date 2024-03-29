<?

/*
	Класс Statistic:
		total - количество дел в отработке у данного врача
		controlArrived - прибыло на контроль
		controlNotArrived - не прибыло на контроль
		approved - утверждено
		inProcess - отработка
		returns - возвраты
		healthCategories - категории годности
*/

class Controller_Main extends Controller
{

	function action_index()
	{	
		if (Profile::$isAuth)
			$this->view->generateView('main_view.php', "Главная страница");
		else
			$this->view->generateView('loginPage_view.php', "Авторизация");
	}

	function action_clown() 
	{
		$this->view->generateView('rg_view.php', "Клоун");
	}
	
}