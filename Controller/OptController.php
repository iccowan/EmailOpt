<?php

class OptController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 
	public function showOptIn() {
		return View::make('admin.emailopt.opt');
	}
	
	public function optIn() {
		if(Input::get('private') != '1') {
			return Redirect::back()->withErrors(['Not Saved', 'You must accept the privacy policy in order to continue.']);
		} else {
			$user = User::find(Auth::id());
			$ip = Request::getClientIp();

			if(Input::get('opt') == '1') {
				$opt = new Opt;
				$opt->cid = $user->id;
				$opt->ip = $ip;
				$opt->means = 'Electronic';
				$opt->option = '1';
				$opt->save();

				$user->opt = '1';
				$user->save();
			}

			$private = new Privatepol;
			$private->cid = $user->id;
			$private->ip = $ip;
			$private->means = 'Electronic';
			$private->option = '1';
			$private->save();

			return Redirect::to('/')->withErrors(['Success', 'You have successfully opted into emails from ZTL ARTCC.']);
		}
	}

	public function optOut() {
		$user = User::find(Auth::id());
		$ip = Request::getClientIp();
		$opt = new Opt;

		$opt->cid = $user->id;
		$opt->ip = $ip;
		$opt->means = 'Electronic';
		$opt->option = '0';
		$opt->save();

		$user->opt = '0';
		$user->save();

		return Redirect::to('/')->withErrors(['Success', 'You have successfully opted out of emails from ZTL ARTCC.']);
	}
	
}
