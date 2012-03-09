<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Vespolina\PartnerBundle\Model;

/**
 * Partner interface, define basic fields
 * 
 * @author Willem-Jan Zijderveld <willemjan@beeldspraak.com>
 */
interface PartnerInterface
{
	/**
	 * Sets the partnerId
	 * 
	 * @param string $partnerId
	 */
	function setPartnerId($partnerId);
	
	/**
	 * Functional partner id
	 * 
	 * @return string
	 */
	function getPartnerId();
	
	/**
	 * Date since when this partner joined
	 * @param DateTime $partnerSince
	 */
	function setPartnerSince(DateTime $partnerSince);
	
	/**
	 * @return DateTime
	 */
	function getPartnerSince();

	/**
	 * THe role of the Partner (e.g. Customer, Supplier, Employee)
	 * @return string
	 */
	function getRole();
	
	/**
	 * Sets the role of the partner
	 * 
	 * @param string $role
	 */
	function setRole($role);
	
	/**
	 * Sets the partners shortname
	 * 
	 * @param string $shortName
	 */
	function setShortName($shortName);
	
	/**
	 * Shortname of partner
	 * 
	 * @return string
	 */
	function getShortName();
	
	/**
	 * Sets the long name
	 * 
	 * @param string $longName
	 */
	function setLongName($longName);
	
	/**
	 * Long name for partner
	 * 
	 * @return string
	 */
	function getLongName();
	
	/**
	 * Sets the partners phone number
	 * 
	 * @param string $phone
	 */
	function setPhone($phone);
	
	/**
	 * Primary phone number
	 * 
	 * @return string
	 */
	function getPhone();
	
	/**
	 * Sets the partners emailaddress
	 * @param string $email
	 */
	function setEmail($email);
	
	/**
	 * Primary email address for communication
	 * 
	 * @return string
	 */
	function getEmail();

	/**
	 * Sets the partners default valuta (ISO-4217)
	 * @param string $valuta
	 */
	function setValuta($valuta);
	
	/**
	 * Default valuta for partner
	 * 
	 * @return string - ISO-4217
	 */
	function getValuta();
	
	/**
	 * Sets the partners default language
	 * 
	 * @param string $language - IETF tag
	 */
	function setLanguage($language);
	
	/**
	 * Default language for partner
	 * 
	 * @return string - IETF tag
	 */
	function getLanguage();
	
	/**
	 * Sets the default payment terms for customer
	 * 
	 * @param string $paymentTerms
	 */
	function setPaymentTerms($paymentTerms);
	
	/**
	 * Default payment terms for partner
	 */
	function getPaymentTerms();
	
	/**
	 * Sets the partners type
	 * 
	 * @param string $type
	 */
	function setType($type);
	
	/**
	 * Discriminator field
	 * 
	 * @return string
	 */
	function getType();
	
	/**
	 * Sets the partners addresses
	 * 
	 * @param \Vespolina\CommonBundle\Model\Address[] $addresses
	 */
	function setAddresses($addresses);
	
	/**
	 * Adds a partners address
	 * 
	 * @param \Vespolina\CommonBundle\Model\Address $address
	 */
	function addAddress($address);
	
	/**
	 * Addresses for this account
	 * 
	 * @return \Vespolina\CommonBundle\Model\Address[]
	 */
	function getAddresses();
	
	/**
	 * Sets the partners contacts
	 * 
	 * @param \Vespolina\CommonBundle\Model\Contact[] $contacts - Iterable contact collection
	 */
	function setContacts($contacts);
	
	/**
	 * Adds a partners Contact
	 * 
	 * @param \Vespolina\CommonBundle\Model\Contact $contact
	 */
	function addContact($contact);
	
	/**
	 * Contacts for this accounts
	 * 
	 * @return \Vespolina\CommonBundle\Model\Contact[]
	 */
	function getContacts();
	
	/**
	 * Sets the personal details for this partner
	 * 
	 * @param $personalDetails
	 */
	function setPersonalDetails($personalDetails);
	
	/**
	 * Personal details of partner (used for type individual)
	 * 
	 * @return mixed
	 */
	function getPersonalDetails();
	
	/**
	 * Sets the organistaion details
	 * 
	 * @param $organisationDetails
	 */
	function setOrganisationDetails($organisationDetails);
	
	/**
	 * The organistaion details for this partner (used for type organisation)
	 * 
	 * @return mixed
	 */
	function getOrganisationDetails();
}