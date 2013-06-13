<?php
class CommonAction extends Action
{
	protected function _initialize() {

	}
	protected function include_fetch() {
		$this->include_tpl = array_merge( $this->common_tpl, $this->include_tpl );
		//解析需引入的子模板,从而assign的变量可以在子摸板中使用
		foreach ( $this->include_tpl as $key=> $val ) {
			$this->assign( $key, $this->fetch( $this->include_tpl[$key] ) );
		}
	}

	protected function display( $templateFile = '', $charset = '', $contentType = '', $content = '', $prefix = '' ) {
		$this->include_fetch();
		parent::display($templateFile,$charset,$contentType,$content,$prefix);
	}

	public function __destruct() {
		if ( get_class($this)==MODULE_NAME.'Action' ) {
			parent::__destruct();
		}
	}
}
