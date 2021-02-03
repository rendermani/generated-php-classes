<?php


 function autoload_ca5124cc493862de39cebdb26d543f92($class)
{
    $classes = array(
        'ascio\v3\AscioService' => __DIR__ .'/AscioService.php',
        'ascio\v3\CreateOrder' => __DIR__ .'/CreateOrder.php',
        'ascio\v3\CreateOrderResponse' => __DIR__ .'/CreateOrderResponse.php',
        'ascio\v3\ValidateOrder' => __DIR__ .'/ValidateOrder.php',
        'ascio\v3\ValidateOrderResponse' => __DIR__ .'/ValidateOrderResponse.php',
        'ascio\v3\GetOrder' => __DIR__ .'/GetOrder.php',
        'ascio\v3\GetOrderResponse' => __DIR__ .'/GetOrderResponse.php',
        'ascio\v3\GetOrders' => __DIR__ .'/GetOrders.php',
        'ascio\v3\GetOrdersResponse' => __DIR__ .'/GetOrdersResponse.php',
        'ascio\v3\GetDomains' => __DIR__ .'/GetDomains.php',
        'ascio\v3\GetDomainsResponse' => __DIR__ .'/GetDomainsResponse.php',
        'ascio\v3\GetPremiumDomains' => __DIR__ .'/GetPremiumDomains.php',
        'ascio\v3\GetPremiumDomainsResponse' => __DIR__ .'/GetPremiumDomainsResponse.php',
        'ascio\v3\GetSslCertificates' => __DIR__ .'/GetSslCertificates.php',
        'ascio\v3\GetSslCertificatesResponse' => __DIR__ .'/GetSslCertificatesResponse.php',
        'ascio\v3\GetDomain' => __DIR__ .'/GetDomain.php',
        'ascio\v3\GetDomainResponse' => __DIR__ .'/GetDomainResponse.php',
        'ascio\v3\AvailabilityInfo' => __DIR__ .'/AvailabilityInfo.php',
        'ascio\v3\AvailabilityInfoResponse' => __DIR__ .'/AvailabilityInfoResponse.php',
        'ascio\v3\GetPrices' => __DIR__ .'/GetPrices.php',
        'ascio\v3\GetPricesResponse' => __DIR__ .'/GetPricesResponse.php',
        'ascio\v3\GetPriceHistory' => __DIR__ .'/GetPriceHistory.php',
        'ascio\v3\GetPriceHistoryResponse' => __DIR__ .'/GetPriceHistoryResponse.php',
        'ascio\v3\GetAccountBalance' => __DIR__ .'/GetAccountBalance.php',
        'ascio\v3\GetAccountBalanceResponse' => __DIR__ .'/GetAccountBalanceResponse.php',
        'ascio\v3\GetAccountTransactions' => __DIR__ .'/GetAccountTransactions.php',
        'ascio\v3\GetAccountTransactionsResponse' => __DIR__ .'/GetAccountTransactionsResponse.php',
        'ascio\v3\GetSalesLines' => __DIR__ .'/GetSalesLines.php',
        'ascio\v3\GetSalesLinesResponse' => __DIR__ .'/GetSalesLinesResponse.php',
        'ascio\v3\GetSubUsers' => __DIR__ .'/GetSubUsers.php',
        'ascio\v3\GetSubUsersResponse' => __DIR__ .'/GetSubUsersResponse.php',
        'ascio\v3\GetSubUser' => __DIR__ .'/GetSubUser.php',
        'ascio\v3\GetSubUserResponse' => __DIR__ .'/GetSubUserResponse.php',
        'ascio\v3\CreateSubUser' => __DIR__ .'/CreateSubUser.php',
        'ascio\v3\CreateSubUserResponse' => __DIR__ .'/CreateSubUserResponse.php',
        'ascio\v3\UpdateSubUser' => __DIR__ .'/UpdateSubUser.php',
        'ascio\v3\UpdateSubUserResponse' => __DIR__ .'/UpdateSubUserResponse.php',
        'ascio\v3\DeleteSubUser' => __DIR__ .'/DeleteSubUser.php',
        'ascio\v3\DeleteSubUserResponse' => __DIR__ .'/DeleteSubUserResponse.php',
        'ascio\v3\GetInvoice' => __DIR__ .'/GetInvoice.php',
        'ascio\v3\GetInvoiceResponse' => __DIR__ .'/GetInvoiceResponse.php',
        'ascio\v3\GetCreditNote' => __DIR__ .'/GetCreditNote.php',
        'ascio\v3\GetCreditNoteResponse' => __DIR__ .'/GetCreditNoteResponse.php',
        'ascio\v3\GetRegistrant' => __DIR__ .'/GetRegistrant.php',
        'ascio\v3\GetRegistrantResponse' => __DIR__ .'/GetRegistrantResponse.php',
        'ascio\v3\GetContact' => __DIR__ .'/GetContact.php',
        'ascio\v3\GetContactResponse' => __DIR__ .'/GetContactResponse.php',
        'ascio\v3\CreateContact' => __DIR__ .'/CreateContact.php',
        'ascio\v3\CreateContactResponse' => __DIR__ .'/CreateContactResponse.php',
        'ascio\v3\CreateRegistrant' => __DIR__ .'/CreateRegistrant.php',
        'ascio\v3\CreateRegistrantResponse' => __DIR__ .'/CreateRegistrantResponse.php',
        'ascio\v3\CreateNameServer' => __DIR__ .'/CreateNameServer.php',
        'ascio\v3\CreateNameServerResponse' => __DIR__ .'/CreateNameServerResponse.php',
        'ascio\v3\CreateDnsSecKey' => __DIR__ .'/CreateDnsSecKey.php',
        'ascio\v3\CreateDnsSecKeyResponse' => __DIR__ .'/CreateDnsSecKeyResponse.php',
        'ascio\v3\GetNameServer' => __DIR__ .'/GetNameServer.php',
        'ascio\v3\GetNameServerResponse' => __DIR__ .'/GetNameServerResponse.php',
        'ascio\v3\GetDnsSecKey' => __DIR__ .'/GetDnsSecKey.php',
        'ascio\v3\GetDnsSecKeyResponse' => __DIR__ .'/GetDnsSecKeyResponse.php',
        'ascio\v3\GetRegistrants' => __DIR__ .'/GetRegistrants.php',
        'ascio\v3\GetRegistrantsResponse' => __DIR__ .'/GetRegistrantsResponse.php',
        'ascio\v3\GetContacts' => __DIR__ .'/GetContacts.php',
        'ascio\v3\GetContactsResponse' => __DIR__ .'/GetContactsResponse.php',
        'ascio\v3\GetNameServers' => __DIR__ .'/GetNameServers.php',
        'ascio\v3\GetNameServersResponse' => __DIR__ .'/GetNameServersResponse.php',
        'ascio\v3\GetDnsSecKeys' => __DIR__ .'/GetDnsSecKeys.php',
        'ascio\v3\GetDnsSecKeysResponse' => __DIR__ .'/GetDnsSecKeysResponse.php',
        'ascio\v3\GetMarks' => __DIR__ .'/GetMarks.php',
        'ascio\v3\GetMarksResponse' => __DIR__ .'/GetMarksResponse.php',
        'ascio\v3\GetMark' => __DIR__ .'/GetMark.php',
        'ascio\v3\GetMarkResponse' => __DIR__ .'/GetMarkResponse.php',
        'ascio\v3\GetDefensive' => __DIR__ .'/GetDefensive.php',
        'ascio\v3\GetDefensiveResponse' => __DIR__ .'/GetDefensiveResponse.php',
        'ascio\v3\GetNameWatch' => __DIR__ .'/GetNameWatch.php',
        'ascio\v3\GetNameWatchResponse' => __DIR__ .'/GetNameWatchResponse.php',
        'ascio\v3\GetSslCertificate' => __DIR__ .'/GetSslCertificate.php',
        'ascio\v3\GetSslCertificateResponse' => __DIR__ .'/GetSslCertificateResponse.php',
        'ascio\v3\GetSslApprovers' => __DIR__ .'/GetSslApprovers.php',
        'ascio\v3\GetSslApproversResponse' => __DIR__ .'/GetSslApproversResponse.php',
        'ascio\v3\GetAutoInstallSsl' => __DIR__ .'/GetAutoInstallSsl.php',
        'ascio\v3\GetAutoInstallSslResponse' => __DIR__ .'/GetAutoInstallSslResponse.php',
        'ascio\v3\GetMessages' => __DIR__ .'/GetMessages.php',
        'ascio\v3\GetMessagesResponse' => __DIR__ .'/GetMessagesResponse.php',
        'ascio\v3\GetAttachment' => __DIR__ .'/GetAttachment.php',
        'ascio\v3\GetAttachmentResponse' => __DIR__ .'/GetAttachmentResponse.php',
        'ascio\v3\PollQueue' => __DIR__ .'/PollQueue.php',
        'ascio\v3\PollQueueResponse' => __DIR__ .'/PollQueueResponse.php',
        'ascio\v3\AckQueueMessage' => __DIR__ .'/AckQueueMessage.php',
        'ascio\v3\AckQueueMessageResponse' => __DIR__ .'/AckQueueMessageResponse.php',
        'ascio\v3\GetQueueMessage' => __DIR__ .'/GetQueueMessage.php',
        'ascio\v3\GetQueueMessageResponse' => __DIR__ .'/GetQueueMessageResponse.php',
        'ascio\v3\UploadDocumentation' => __DIR__ .'/UploadDocumentation.php',
        'ascio\v3\UploadDocumentationResponse' => __DIR__ .'/UploadDocumentationResponse.php',
        'ascio\v3\UploadMessage' => __DIR__ .'/UploadMessage.php',
        'ascio\v3\UploadMessageResponse' => __DIR__ .'/UploadMessageResponse.php',
        'ascio\v3\AbstractOrderRequest' => __DIR__ .'/AbstractOrderRequest.php',
        'ascio\v3\OrderType' => __DIR__ .'/OrderType.php',
        'ascio\v3\MarkOrderRequest' => __DIR__ .'/MarkOrderRequest.php',
        'ascio\v3\AbstractMark' => __DIR__ .'/AbstractMark.php',
        'ascio\v3\MarkServiceType' => __DIR__ .'/MarkServiceType.php',
        'ascio\v3\NotificationFrequencyType' => __DIR__ .'/NotificationFrequencyType.php',
        'ascio\v3\Registrant' => __DIR__ .'/Registrant.php',
        'ascio\v3\RegistrantInfo' => __DIR__ .'/RegistrantInfo.php',
        'ascio\v3\Contact' => __DIR__ .'/Contact.php',
        'ascio\v3\ContactInfo' => __DIR__ .'/ContactInfo.php',
        'ascio\v3\Extensions' => __DIR__ .'/Extensions.php',
        'ascio\v3\KeyValue' => __DIR__ .'/KeyValue.php',
        'ascio\v3\AutoInstallSslOrderRequest' => __DIR__ .'/AutoInstallSslOrderRequest.php',
        'ascio\v3\AutoInstallSsl' => __DIR__ .'/AutoInstallSsl.php',
        'ascio\v3\SslCertificateOrderRequest' => __DIR__ .'/SslCertificateOrderRequest.php',
        'ascio\v3\SslCertificate' => __DIR__ .'/SslCertificate.php',
        'ascio\v3\WebServerType' => __DIR__ .'/WebServerType.php',
        'ascio\v3\SslDomainValidationType' => __DIR__ .'/SslDomainValidationType.php',
        'ascio\v3\TreatyOrStatuteMark' => __DIR__ .'/TreatyOrStatuteMark.php',
        'ascio\v3\Trademark' => __DIR__ .'/Trademark.php',
        'ascio\v3\CourtValidatedMark' => __DIR__ .'/CourtValidatedMark.php',
        'ascio\v3\SecurityHeaderDetails' => __DIR__ .'/SecurityHeaderDetails.php',
        'ascio\v3\ArrayOfMarkOrderDocument' => __DIR__ .'/ArrayOfMarkOrderDocument.php',
        'ascio\v3\MarkOrderDocument' => __DIR__ .'/MarkOrderDocument.php',
        'ascio\v3\Attachment' => __DIR__ .'/Attachment.php',
        'ascio\v3\MarkOrderDocType' => __DIR__ .'/MarkOrderDocType.php',
        'ascio\v3\NameWatchOrderRequest' => __DIR__ .'/NameWatchOrderRequest.php',
        'ascio\v3\NameWatch' => __DIR__ .'/NameWatch.php',
        'ascio\v3\DefensiveOrderRequest' => __DIR__ .'/DefensiveOrderRequest.php',
        'ascio\v3\Defensive' => __DIR__ .'/Defensive.php',
        'ascio\v3\DomainOrderRequest' => __DIR__ .'/DomainOrderRequest.php',
        'ascio\v3\AbstractResponse' => __DIR__ .'/AbstractResponse.php',
        'ascio\v3\OrderInfo' => __DIR__ .'/OrderInfo.php',
        'ascio\v3\OrderStatusType' => __DIR__ .'/OrderStatusType.php',
        'ascio\v3\ArrayOfOrderHistory' => __DIR__ .'/ArrayOfOrderHistory.php',
        'ascio\v3\OrderHistory' => __DIR__ .'/OrderHistory.php',
        'ascio\v3\GetOrderRequest' => __DIR__ .'/GetOrderRequest.php',
        'ascio\v3\GetOrdersRequest' => __DIR__ .'/GetOrdersRequest.php',
        'ascio\v3\ArrayOfOrderStatusType' => __DIR__ .'/ArrayOfOrderStatusType.php',
        'ascio\v3\ArrayOfOrderType' => __DIR__ .'/ArrayOfOrderType.php',
        'ascio\v3\ArrayOfObjectType' => __DIR__ .'/ArrayOfObjectType.php',
        'ascio\v3\ObjectType' => __DIR__ .'/ObjectType.php',
        'ascio\v3\SearchOrderSortType' => __DIR__ .'/SearchOrderSortType.php',
        'ascio\v3\PagingInfo' => __DIR__ .'/PagingInfo.php',
        'ascio\v3\ArrayOfOrderInfo' => __DIR__ .'/ArrayOfOrderInfo.php',
        'ascio\v3\GetDomainsRequest' => __DIR__ .'/GetDomainsRequest.php',
        'ascio\v3\DomainSortType' => __DIR__ .'/DomainSortType.php',
        'ascio\v3\DomainType' => __DIR__ .'/DomainType.php',
        'ascio\v3\ProxyType' => __DIR__ .'/ProxyType.php',
        'ascio\v3\ArrayOfDomainInfo' => __DIR__ .'/ArrayOfDomainInfo.php',
        'ascio\v3\GetPremiumDomainsRequest' => __DIR__ .'/GetPremiumDomainsRequest.php',
        'ascio\v3\ArrayOfPremiumDomainInfo' => __DIR__ .'/ArrayOfPremiumDomainInfo.php',
        'ascio\v3\PremiumDomainInfo' => __DIR__ .'/PremiumDomainInfo.php',
        'ascio\v3\GetDomainRequest' => __DIR__ .'/GetDomainRequest.php',
        'ascio\v3\DomainInfo' => __DIR__ .'/DomainInfo.php',
        'ascio\v3\Domain' => __DIR__ .'/Domain.php',
        'ascio\v3\NameServers' => __DIR__ .'/NameServers.php',
        'ascio\v3\NameServer' => __DIR__ .'/NameServer.php',
        'ascio\v3\DomainTradeMark' => __DIR__ .'/DomainTradeMark.php',
        'ascio\v3\DnsSecKeys' => __DIR__ .'/DnsSecKeys.php',
        'ascio\v3\DnsSecKey' => __DIR__ .'/DnsSecKey.php',
        'ascio\v3\PrivacyProxy' => __DIR__ .'/PrivacyProxy.php',
        'ascio\v3\PrivacyProxyType' => __DIR__ .'/PrivacyProxyType.php',
        'ascio\v3\AvailabilityInfoRequest' => __DIR__ .'/AvailabilityInfoRequest.php',
        'ascio\v3\ArrayOfPrices' => __DIR__ .'/ArrayOfPrices.php',
        'ascio\v3\PriceInfo' => __DIR__ .'/PriceInfo.php',
        'ascio\v3\Product' => __DIR__ .'/Product.php',
        'ascio\v3\GetPricesRequest' => __DIR__ .'/GetPricesRequest.php',
        'ascio\v3\GetPriceHistoryRequest' => __DIR__ .'/GetPriceHistoryRequest.php',
        'ascio\v3\GetAccountBalanceRequest' => __DIR__ .'/GetAccountBalanceRequest.php',
        'ascio\v3\AccountTransactionType' => __DIR__ .'/AccountTransactionType.php',
        'ascio\v3\GetAccountTransactionsRequest' => __DIR__ .'/GetAccountTransactionsRequest.php',
        'ascio\v3\ArrayOfAccountTransactions' => __DIR__ .'/ArrayOfAccountTransactions.php',
        'ascio\v3\AccountTransaction' => __DIR__ .'/AccountTransaction.php',
        'ascio\v3\SalesLineState' => __DIR__ .'/SalesLineState.php',
        'ascio\v3\InvoiceState' => __DIR__ .'/InvoiceState.php',
        'ascio\v3\SalesLineSortType' => __DIR__ .'/SalesLineSortType.php',
        'ascio\v3\ArrayOfSalesLineState' => __DIR__ .'/ArrayOfSalesLineState.php',
        'ascio\v3\GetSalesLinesRequest' => __DIR__ .'/GetSalesLinesRequest.php',
        'ascio\v3\ArrayOfSalesLines' => __DIR__ .'/ArrayOfSalesLines.php',
        'ascio\v3\SalesLine' => __DIR__ .'/SalesLine.php',
        'ascio\v3\GetSubUsersRequest' => __DIR__ .'/GetSubUsersRequest.php',
        'ascio\v3\ArrayOfUsers' => __DIR__ .'/ArrayOfUsers.php',
        'ascio\v3\UserInfo' => __DIR__ .'/UserInfo.php',
        'ascio\v3\User' => __DIR__ .'/User.php',
        'ascio\v3\GetSubUserRequest' => __DIR__ .'/GetSubUserRequest.php',
        'ascio\v3\DeleteSubUserRequest' => __DIR__ .'/DeleteSubUserRequest.php',
        'ascio\v3\CreateSubUserRequest' => __DIR__ .'/CreateSubUserRequest.php',
        'ascio\v3\UpdateSubUserRequest' => __DIR__ .'/UpdateSubUserRequest.php',
        'ascio\v3\GetInvoiceRequest' => __DIR__ .'/GetInvoiceRequest.php',
        'ascio\v3\ArrayOfSalesLineGroups' => __DIR__ .'/ArrayOfSalesLineGroups.php',
        'ascio\v3\SalesLineGroup' => __DIR__ .'/SalesLineGroup.php',
        'ascio\v3\GetCreditNoteRequest' => __DIR__ .'/GetCreditNoteRequest.php',
        'ascio\v3\GetRegistrantRequest' => __DIR__ .'/GetRegistrantRequest.php',
        'ascio\v3\GetContactRequest' => __DIR__ .'/GetContactRequest.php',
        'ascio\v3\CreateContactRequest' => __DIR__ .'/CreateContactRequest.php',
        'ascio\v3\CreateRegistrantRequest' => __DIR__ .'/CreateRegistrantRequest.php',
        'ascio\v3\CreateNameServerRequest' => __DIR__ .'/CreateNameServerRequest.php',
        'ascio\v3\CreateDnsSecKeyRequest' => __DIR__ .'/CreateDnsSecKeyRequest.php',
        'ascio\v3\GetNameServerRequest' => __DIR__ .'/GetNameServerRequest.php',
        'ascio\v3\GetDnsSecKeyRequest' => __DIR__ .'/GetDnsSecKeyRequest.php',
        'ascio\v3\GetRegistrantsRequest' => __DIR__ .'/GetRegistrantsRequest.php',
        'ascio\v3\RegistrantSortType' => __DIR__ .'/RegistrantSortType.php',
        'ascio\v3\ArrayOfRegistrantInfo' => __DIR__ .'/ArrayOfRegistrantInfo.php',
        'ascio\v3\GetContactsRequest' => __DIR__ .'/GetContactsRequest.php',
        'ascio\v3\ArrayOfContactInfo' => __DIR__ .'/ArrayOfContactInfo.php',
        'ascio\v3\ContactSortType' => __DIR__ .'/ContactSortType.php',
        'ascio\v3\GetNameServersRequest' => __DIR__ .'/GetNameServersRequest.php',
        'ascio\v3\ArrayOfNameServers' => __DIR__ .'/ArrayOfNameServers.php',
        'ascio\v3\NameServerSortType' => __DIR__ .'/NameServerSortType.php',
        'ascio\v3\GetDnsSecKeysRequest' => __DIR__ .'/GetDnsSecKeysRequest.php',
        'ascio\v3\ArrayOfDnsSecKeys' => __DIR__ .'/ArrayOfDnsSecKeys.php',
        'ascio\v3\DnsSecKeySortType' => __DIR__ .'/DnsSecKeySortType.php',
        'ascio\v3\GetSslCertificatesRequest' => __DIR__ .'/GetSslCertificatesRequest.php',
        'ascio\v3\SslCertificateSortType' => __DIR__ .'/SslCertificateSortType.php',
        'ascio\v3\ArrayOfSslCertificateInfo' => __DIR__ .'/ArrayOfSslCertificateInfo.php',
        'ascio\v3\GetMarksRequest' => __DIR__ .'/GetMarksRequest.php',
        'ascio\v3\MarkSortType' => __DIR__ .'/MarkSortType.php',
        'ascio\v3\ArrayOfMarkInfo' => __DIR__ .'/ArrayOfMarkInfo.php',
        'ascio\v3\GetMarkRequest' => __DIR__ .'/GetMarkRequest.php',
        'ascio\v3\MarkInfo' => __DIR__ .'/MarkInfo.php',
        'ascio\v3\GetDefensiveRequest' => __DIR__ .'/GetDefensiveRequest.php',
        'ascio\v3\DefensiveInfo' => __DIR__ .'/DefensiveInfo.php',
        'ascio\v3\GetNameWatchRequest' => __DIR__ .'/GetNameWatchRequest.php',
        'ascio\v3\NameWatchInfo' => __DIR__ .'/NameWatchInfo.php',
        'ascio\v3\GetSslCertificateRequest' => __DIR__ .'/GetSslCertificateRequest.php',
        'ascio\v3\GetSslApproversRequest' => __DIR__ .'/GetSslApproversRequest.php',
        'ascio\v3\SslCertificateInfo' => __DIR__ .'/SslCertificateInfo.php',
        'ascio\v3\GetAutoInstallSslRequest' => __DIR__ .'/GetAutoInstallSslRequest.php',
        'ascio\v3\AutoInstallSslInfo' => __DIR__ .'/AutoInstallSslInfo.php',
        'ascio\v3\GetMessagesRequest' => __DIR__ .'/GetMessagesRequest.php',
        'ascio\v3\ArrayOfMessage' => __DIR__ .'/ArrayOfMessage.php',
        'ascio\v3\Message' => __DIR__ .'/Message.php',
        'ascio\v3\ArrayOfAttachment' => __DIR__ .'/ArrayOfAttachment.php',
        'ascio\v3\MessageType' => __DIR__ .'/MessageType.php',
        'ascio\v3\PollQueueRequest' => __DIR__ .'/PollQueueRequest.php',
        'ascio\v3\GetAttachmentRequest' => __DIR__ .'/GetAttachmentRequest.php',
        'ascio\v3\QueueMessage' => __DIR__ .'/QueueMessage.php',
        'ascio\v3\ArrayOfErrorCode' => __DIR__ .'/ArrayOfErrorCode.php',
        'ascio\v3\ErrorCode' => __DIR__ .'/ErrorCode.php',
        'ascio\v3\AckQueueMessageRequest' => __DIR__ .'/AckQueueMessageRequest.php',
        'ascio\v3\GetQueueMessageRequest' => __DIR__ .'/GetQueueMessageRequest.php',
        'ascio\v3\UploadDocumentationRequest' => __DIR__ .'/UploadDocumentationRequest.php',
        'ascio\v3\UploadMessageRequest' => __DIR__ .'/UploadMessageRequest.php',
        'ascio\v3\ArrayOfstring' => __DIR__ .'/ArrayOfstring.php',
        'ascio\v3\ArrayOfint' => __DIR__ .'/ArrayOfint.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_ca5124cc493862de39cebdb26d543f92');

// Do nothing. The rest is just leftovers from the code generation.
{
}