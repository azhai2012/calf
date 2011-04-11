var Sys = {
	isEmailSpan : function(str) {
	    var emailPat = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;  
        var matchArray = str.match(emailPat);  
        if (matchArray === null) {
			return false;
		} else {
			return true;
		}
	},
	onMsg : function(msg) {
		alert(msg);
	},
	showRes : function(o) {
		var obj = o.options[o.selectedIndex].value;
		if (obj === 'all')
			$('.roletree').hide();
		else
			$('.roletree').show();

	},
	modifyUser : function(id) {
		
		var user = $('#username').val();
		var email = $('#email').val();
		var psw = $('#psw').val();
	    
		
		if (confirm('您确定要修改该用户的信息？')) {
			var active = $("#active").find("option:selected").val();
			var pid = $("input[name='roles']:checked").val();
			var data = $('#username').val() + ';' + $('#email').val() + ';'
					+ $('#psw').val() + ';' + $('#active').val() + ';' + pid;

			$.ajax( {
				type : "post",
				url : "/ajax?sk=sysuserupd",
				data : "&data=" + data + "&id=" + id,
				beforeSend : function(XMLHttpRequest) {
					//
				},
				success : function(data, textStatus) {

					$('#status').html('成功保存');
				},
				complete : function(XMLHttpRequest, textStatus) {
					$('#status').removeClass('warning').removeClass('error')
							.addClass('success');
				},
				error : function(XMLHttpRequest, textStatus) {
					$('#status').html('保存有误！').removeClass('warning')
							.removeClass('success').addClass('error');
				}
			});
		}
	},
	delUser : function(id) {
       
		if (confirm('您确定要删除该条用户记录？')) {
			$.ajax( {
				type : "post",
				url : "/ajax?sk=sysuserdel",
				data : "&id=" + id,
				beforeSend : function(XMLHttpRequest) {
					//
			},
			success : function(data, textStatus) {
				location.href = "/home?sk=sysuser";
				// $('#status').html('成功保存').removeClass('warning').addClass('success');
			},
			complete : function(XMLHttpRequest, textStatus) {
				// $('#status').removeClass('warning').addClass('success');
			},
			error : function(XMLHttpRequest, textStatus) {
				// $('#status').html('保存有误！').removeClass('success').addClass('error');
			}
			});
		}
	},
	AddUser : function() {
		var user = $('#username').val();
		var email = $('#email').val();
		var psw = $('#psw').val();
		var active = $("#active").find("option:selected").val();
		var id = $("input[name='roles']:checked").val();
		var data = user + ';' + email + ';' + psw + ';' + $('#active').val();
		if (user === '') {
			$('#status').html('用户名不能为空！').addClass('warning').removeClass(
					'success');
		} else if (!this.isEmailSpan(email)) {
			$('#status').html('Email格式不正确！').addClass('warning').removeClass(
					'success');
		} else if (psw === '') {
			$('#status').html('密码不能为空！').addClass('warning').removeClass(
					'success');
		} else {
			$.ajax( {
				type : "post",
				url : "/ajax?sk=sysuseradd",
				data : "&data=" + data + "&id=" + id,
				beforeSend : function(XMLHttpRequest) {
					//
				},
				success : function(data, textStatus) {

					$('#status').html('成功保存').removeClass('warning').addClass(
							'success');
				},
				complete : function(XMLHttpRequest, textStatus) {
					// $('#status').removeClass('warning').addClass('success');
				},
				error : function(XMLHttpRequest, textStatus) {
					$('#status').html('保存有误！').removeClass('success').addClass(
							'error');
				}
			});
		}

	},
	getTree : function() {
		var id = $('.rid').val();

		$.ajax( {
			type : "post",
			url : "/ajax?sk=sysroletree",
			data : "&id=" + id,
			beforeSend : function(XMLHttpRequest) {

			},
			success : function(data, textStatus) {

				var d = eval('(' + data + ')');
				$(".roletree div.checkbox").each(function(a, b) {
					if (d[a].permission === 'allow')
						$(this).attr("class", 'checkbox checked');
					else
						$(this).attr("class", 'checkbox');

				});
			},
			complete : function(XMLHttpRequest, textStatus) {
				// $('#hh').html();
		},
		error : function(XMLHttpRequest, textStatus) {

		}
		});

	},
	delRole : function(id) {
		if (confirm('您确定要删除该角色信息？')) {
			$.ajax( {
				type : "post",
				url : "/ajax?sk=sysroledel",
				data : "&id=" + id,
				beforeSend : function(XMLHttpRequest) {

				},
				success : function(data, textStatus) {
					location.href = "/home?sk=sysrole";

				},
				complete : function(XMLHttpRequest, textStatus) {

				},
				error : function(XMLHttpRequest, textStatus) {
				}
			});
		}
	},
	addRoleName : function() {

		if (confirm('您确定要增加该角色信息？')) {
			var rolename = $('#rolename').val();
			var v01 = '';
			var v02 = '';
			var sel = $("#all").find("option:selected").val();

			$(".roletree div.checkbox")
					.each(
							function(a, b) {

								var obj = $(this).parent().find('input');
								obj = obj.val();

								if ($(this).attr("class") === 'checkbox checked'
										|| $(this).attr("class") === 'checkbox half_checked') {
									v01 = obj + ';allow|';

								} else {
									v01 = obj + ';deny|';
								}
								v02 = v02 + v01;
							});

			if (sel === 'all') {
				v02 = 'all;allow;';
			}

			if (v02 != '') {
				$.ajax( {
							type : "post",
							url : "/ajax?sk=sysroleadd",
							data : "&data=" + rolename + "&res="
									+ v02.substr(0, v02.length - 1),

							beforeSend : function(XMLHttpRequest) {
								$('#status').html('正在保存...')
										.addClass('warning');
							},
							success : function(data, textStatus) {
								$('#status').html('成功保存');
							},
							complete : function(XMLHttpRequest, textStatus) {
								$('#status').removeClass('warning').addClass(
										'success');
							},
							error : function(XMLHttpRequest, textStatus) {
								$('#status').html('保存有误！').removeClass(
										'warning').removeClass('success')
										.addClass('error');
							}
						});
			}
		}
	},
	objClick : function() {
		var v01 = '';
		var v02 = '';
		var id = $('.rid').val();
		var sel = $("#all").find("option:selected").val();

		var users = '';
		$(".userlist input").each(function(a, b) {
			if ($(this).attr("checked") === true) {
				users = users + $(this).val() + ';';
			}
		});

		$(".roletree div.checkbox")
				.each(
						function(a, b) {

							var obj = $(this).parent().find('input');
							obj = obj.val();

							if ($(this).attr("class") === 'checkbox checked'
									|| $(this).attr("class") === 'checkbox half_checked') {
								v01 = obj + ';allow|';

							} else {
								v01 = obj + ';deny|';
							}
							v02 = v02 + v01;
						});

		if (sel === 'all') {
			v02 = 'all;allow;';
		}

		if (v02 != '') {
			$.ajax( {
				type : "post",
				url : "/ajax?sk=sysrolemodify",
				data : "&res=" + v02.substr(0, v02.length - 1) + '&id=' + id
						+ '&user=' + users,
				beforeSend : function(XMLHttpRequest) {
					$('#status').html('正在保存...').addClass('warning');
				},
				success : function(data, textStatus) {
					$('#status').html('成功保存');
				},
				complete : function(XMLHttpRequest, textStatus) {
					$('#status').removeClass('warning').addClass('success');
				},
				error : function(XMLHttpRequest, textStatus) {
					$('#status').html('保存有误！').removeClass('warning')
							.removeClass('success').addClass('error');
				}
			});
		}
	}
}