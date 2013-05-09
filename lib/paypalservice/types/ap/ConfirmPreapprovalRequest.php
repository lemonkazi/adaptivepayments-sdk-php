<?php 
namespace paypalservice\types\ap;
/**
 * The request to confirm a Preapproval. 
 */
class ConfirmPreapprovalRequest  
  extends PPMessage   {

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var RequestEnvelope 	 
	 */ 
	public $requestEnvelope;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $preapprovalKey;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $fundingSourceId;

	/**
	 * 
	 * @access public
	 
	 	 	 	 
	 * @var string 	 
	 */ 
	public $pin;

	/**
	 * Constructor with arguments
	 */
	public function __construct($requestEnvelope = NULL, $preapprovalKey = NULL) {
		$this->requestEnvelope = $requestEnvelope;
		$this->preapprovalKey = $preapprovalKey;
	}


}