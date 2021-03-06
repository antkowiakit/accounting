<?php

/*
 * Agency Core Accounting API
 *
 * Abstracts, interfaces and traits to provide uniform access to Xero, FreeAgent and Kashflow APIs.
 *
 * Copyright (c) 2016 Patryk Antkowiak.
 * Free to use under the MIT licence, for full details view the LICENCE file.
 *
 */

namespace Accounting\Abstracts;

use Accounting\Interfaces\Model;

abstract class PrintInvoice implements Model
{
    /*
     * Standard variables
     *
     * Default properties used by all package models
     * of this type to ensure uniformity.
     *
     * Child class can augment these properties as required for API.
     *
     */
	public $invoiceNumber;
}