<?php

function state($state) {
	if ($state==0) {
		return '<span class="badge badge-danger">Inactivo</span>';
	} elseif ($state==1) {
		return '<span class="badge badge-success">Activo</span>';
	} else {
		return '<span class="badge badge-dark">Desconocido</span>';
	}
}

function stateArticle($state) {
	if ($state==0) {
		return '<span class="badge badge-info">Borrador</span>';
	} elseif ($state==1) {
		return '<span class="badge badge-success">Publicado</span>';
	} else {
		return '<span class="badge badge-dark">Desconocido</span>';
	}
}

function roleUser($user, $badge=1) {
	if (!is_null($user->roles)) {
		$roles="";
		foreach ($user->roles as $rol) {
			if ($user->hasRole($rol->name)) {
				$roles.=$rol->name."<br>";
			}
		}
		if ($badge==1) {
			return '<span class="badge badge-primary">'.$roles.'</span>';
		} elseif ($badge==0) {
			return $roles;
		}
	} else {
		if ($badge==1) {
			return '<span class="badge badge-dark">Desconocido</span>';
		} elseif ($badge==0) {
			return 'Desconocido';
		}
	}
}

function active($path, $group=null) {
	if (is_array($path)) {
		foreach ($path as $url) {
			if (is_null($group)) {
				if (request()->is($url)) {
					return 'active';
				}
			} else {
				if (is_int(strpos(request()->path(), $url))) {
					return 'active';
				}
			}
		}
		return '';
	} else {
		if (is_null($group)) {
			return request()->is($path) ? 'active' : '';
		} else {
			return is_int(strpos(request()->path(), $path)) ? 'active' : '';
		}
	}
}

function menu_expanded($path, $group=null) {
	if (is_array($path)) {
		foreach ($path as $url) {
			if (is_null($group)) {
				if (request()->is($url)) {
					return 'true';
				}
			} else {
				if (is_int(strpos(request()->path(), $url))) {
					return 'true';
				}
			}
		}
		return 'false';
	} else {
		if (is_null($group)) {
			return request()->is($path) ? 'true' : 'false';
		} else {
			return is_int(strpos(request()->path(), $path)) ? 'true' : 'false';
		}
	}
}

function submenu($path, $action=null) {
	if (is_array($path)) {
		foreach ($path as $url) {
			if (is_null($action)) {
				if (request()->is($url)) {
					return 'class=active';
				}
			} else {
				if (is_int(strpos(request()->path(), $url))) {
					return 'show';
				}
			}
		}
		return '';
	} else {
		if (is_null($action)) {
			return request()->is($path) ? 'class=active' : '';
		} else {
			return is_int(strpos(request()->path(), $path)) ? 'show' : '';
		}
	}
}

function selectArray($arrays, $selectedItems) {
	$selects="";
	foreach ($arrays as $array) {
		$select="";
		if (count($selectedItems)>0) {
			foreach ($selectedItems as $selected) {
				if (is_object($selected) && $selected->slug==$array->slug) {
					$select="selected";
					break;
				} elseif ($selected==$array->slug) {
					$select="selected";
					break;
				}
			}
		}
		$selects.='<option value="'.$array->slug.'" '.$select.'>'.$array->name.'</option>';
	}
	return $selects;
}

function store_files($file, $file_name, $route) {
	$image=$file_name.".".$file->getClientOriginalExtension();
	if (file_exists(public_path().$route.$image)) {
		unlink(public_path().$route.$image);
	}
	$file->move(public_path().$route, $image);
	return $image;
}

function image_exist($file_route, $image, $user_image=false, $large=true) {
	if (file_exists(public_path().$file_route.$image)) {
		$img=asset($file_route.$image);
	} else {
		if ($user_image) {
			$img=asset("/admins/img/template/usuario.png");
		} else {
			if ($large) {
				$img=asset("/admins/img/template/imagen.jpg");
			} else {
				$img=asset("/admins/img/template/image.jpg");
			}
		}
	}

	return $img;
}

function typeCategory($type, $badge=false) {
	if ($badge) {
		if ($type==1) {
			return '<span class="badge badge-primary">Preguntas Frecuentes</span>';
		} elseif ($type==2) {
			return '<span class="badge badge-primary">Centro de Ayuda</span>';
		} elseif ($type==3) {
			return '<span class="badge badge-primary">Blog</span>';
		} else {
			return '<span class="badge badge-dark">Desconocido</span>';
		}
	} else {
		if ($type==1) {
			return 'Preguntas Frecuentes';
		} elseif ($type==2) {
			return 'Centro de Ayuda';
		} elseif ($type==3) {
			return 'Blog';
		} else {
			return 'Desconocido';
		}
	}
}