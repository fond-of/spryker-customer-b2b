<?php

namespace FondOfSpryker\Zed\CustomerB2b\Communication\Controller;

use Generated\Shared\Transfer\CustomerResponseTransfer;
use Generated\Shared\Transfer\CustomerTransfer;
use Spryker\Zed\Customer\Communication\Controller\GatewayController as SprykerGatewayController;

/**
 * @method \FondOfSpryker\Zed\CustomerB2b\Business\CustomerB2bFacadeInterface getFacade()
 * @method \FondOfSpryker\Zed\CustomerB2b\Communication\CustomerB2bCommunicationFactory getFactory()
 */
class GatewayController extends SprykerGatewayController
{
    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerResponseTransfer
     */
    public function findCustomerByExternalReferenceAction(CustomerTransfer $customerTransfer): CustomerResponseTransfer
    {
        return $this->getFacade()->findCustomerByExternalReference($customerTransfer->getExternalReference());
    }

    /**
     * @param \Generated\Shared\Transfer\CustomerTransfer $customerTransfer
     *
     * @return \Generated\Shared\Transfer\CustomerResponseTransfer
     */
    public function findCustomerByReferenceAction(CustomerTransfer $customerTransfer): CustomerResponseTransfer
    {
        return $this->getFacade()->findCustomerByReference($customerTransfer->getCustomerReference());
    }
}
