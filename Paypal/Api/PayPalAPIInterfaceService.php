<?php

namespace Paypal\Api;

include_once('EnhancedCheckoutDataType.php');
include_once('EnhancedPaymentDataType.php');
include_once('EnhancedItemDataType.php');
include_once('EnhancedPaymentInfoType.php');
include_once('EnhancedInitiateRecoupRequestDetailsType.php');
include_once('EnhancedCompleteRecoupRequestDetailsType.php');
include_once('EnhancedCompleteRecoupResponseDetailsType.php');
include_once('EnhancedCancelRecoupRequestDetailsType.php');
include_once('EnhancedPayerInfoType.php');
include_once('AccountStateCodeType.php');
include_once('AckCodeType.php');
include_once('AddressOwnerCodeType.php');
include_once('AuctionTypeCodeType.php');
include_once('BalanceCodeType.php');
include_once('BuyerPaymentMethodCodeType.php');
include_once('BuyerProtectionCodeType.php');
include_once('CheckoutStatusCodeType.php');
include_once('CountryCodeType.php');
include_once('CurrencyCodeType.php');
include_once('DepositTypeCodeType.php');
include_once('DetailLevelCodeType.php');
include_once('IncentiveSiteAppliedOnType.php');
include_once('IncentiveAppliedStatusType.php');
include_once('PaymentReasonType.php');
include_once('AccountEntryType.php');
include_once('AdditionalAccountType.php');
include_once('PromotedItemType.php');
include_once('CrossPromotionsType.php');
include_once('AccountSummaryType.php');
include_once('BuyerType.php');
include_once('SellerType.php');
include_once('FeeType.php');
include_once('FeesType.php');
include_once('ShippingCarrierDetailsType.php');
include_once('CalculatedShippingRateType.php');
include_once('FlatShippingRateType.php');
include_once('SalesTaxType.php');
include_once('ShippingDetailsType.php');
include_once('SiteHostedPictureType.php');
include_once('VendorHostedPictureType.php');
include_once('ValType.php');
include_once('AttributeType.php');
include_once('AttributeSetType.php');
include_once('ListOfAttributeSetType.php');
include_once('CategoryType.php');
include_once('StorefrontType.php');
include_once('ListingDesignerType.php');
include_once('CharityType.php');
include_once('SellingStatusType.php');
include_once('ReviseStatusType.php');
include_once('ListingDetailsType.php');
include_once('ItemType.php');
include_once('TransactionsType.php');
include_once('TransactionType.php');
include_once('PaymentMeansType.php');
include_once('PaymentType.php');
include_once('TransactionStatusType.php');
include_once('UserType.php');
include_once('VATDetailsType.php');
include_once('SchedulingInfoType.php');
include_once('ItemArrayType.php');
include_once('CategoryArrayType.php');
include_once('PaginationType.php');
include_once('ModifiedFieldType.php');
include_once('PaginationResultType.php');
include_once('ErrorParameterType.php');
include_once('ErrorType.php');
include_once('FaultDetailsType.php');
include_once('AbstractRequestType.php');
include_once('AbstractResponseType.php');
include_once('PhoneNumberType.php');
include_once('AddressType.php');
include_once('EscrowCodeType.php');
include_once('FeedbackRatingStarCodeType.php');
include_once('GalleryTypeCodeType.php');
include_once('GeneralPaymentMethodCodeType.php');
include_once('GiftServicesCodeType.php');
include_once('HitCounterCodeType.php');
include_once('InsuranceOptionCodeType.php');
include_once('ListingDurationCodeType.php');
include_once('ListingEnhancementsCodeType.php');
include_once('ListingTypeCodeType.php');
include_once('MerchandizingPrefCodeType.php');
include_once('ModifyCodeType.php');
include_once('PhotoDisplayCodeType.php');
include_once('PromotionItemPriceTypeCodeType.php');
include_once('PromotionItemSelectionCodeType.php');
include_once('PromotionMethodCodeType.php');
include_once('PromotionSchemeCodeType.php');
include_once('PurchasePurposeTypeCodeType.php');
include_once('SellerLevelCodeType.php');
include_once('SellerPaymentMethodCodeType.php');
include_once('SeverityCodeType.php');
include_once('ShippingOptionCodeType.php');
include_once('ShippingPackageCodeType.php');
include_once('ShippingRatesTypeCodeType.php');
include_once('ShippingRegionCodeType.php');
include_once('ShippingServiceCodeType.php');
include_once('ShippingTermsCodeType.php');
include_once('SiteCodeType.php');
include_once('StoreVisibilityStatusType.php');
include_once('UnitCodeType.php');
include_once('UserStatusCodeType.php');
include_once('VATStatusCodeType.php');
include_once('CreditCardTypeType.php');
include_once('PersonNameType.php');
include_once('PaymentNotificationServiceCodeType.php');
include_once('BankIDCodeType.php');
include_once('RefundType.php');
include_once('UnitOfMeasure.php');
include_once('RedeemedOfferType.php');
include_once('APIType.php');
include_once('IncentiveRequestCodeType.php');
include_once('IncentiveRequestDetailLevelCodeType.php');
include_once('IncentiveTypeCodeType.php');
include_once('IncentiveAppliedToType.php');
include_once('IncentiveDetailType.php');
include_once('IncentiveItemType.php');
include_once('IncentiveBucketType.php');
include_once('IncentiveRequestDetailsType.php');
include_once('GetIncentiveEvaluationRequestDetailsType.php');
include_once('GetIncentiveEvaluationResponseDetailsType.php');
include_once('SetExpressCheckoutRequestDetailsType.php');
include_once('ExecuteCheckoutOperationsRequestDetailsType.php');
include_once('UserChannelCodeType.php');
include_once('SetDataRequestType.php');
include_once('AuthorizationRequestType.php');
include_once('BillingApprovalDetailsType.php');
include_once('InfoSharingDirectivesType.php');
include_once('OrderDetailsType.php');
include_once('PaymentDirectivesType.php');
include_once('BuyerDetailType.php');
include_once('IdentificationInfoType.php');
include_once('MobileIDInfoType.php');
include_once('RememberMeIDInfoType.php');
include_once('IdentityTokenInfoType.php');
include_once('FundingSourceDetailsType.php');
include_once('BillingAgreementDetailsType.php');
include_once('GetExpressCheckoutDetailsResponseDetailsType.php');
include_once('ExecuteCheckoutOperationsResponseDetailsType.php');
include_once('SetDataResponseType.php');
include_once('AuthorizationResponseType.php');
include_once('DoExpressCheckoutPaymentRequestDetailsType.php');
include_once('DoExpressCheckoutPaymentResponseDetailsType.php');
include_once('DoCaptureResponseDetailsType.php');
include_once('DoDirectPaymentRequestDetailsType.php');
include_once('CreateMobilePaymentRequestDetailsType.php');
include_once('GetMobileStatusRequestDetailsType.php');
include_once('SetAuthFlowParamRequestDetailsType.php');
include_once('GetAuthDetailsResponseDetailsType.php');
include_once('SetAccessPermissionsRequestDetailsType.php');
include_once('GetAccessPermissionDetailsResponseDetailsType.php');
include_once('BAUpdateResponseDetailsType.php');
include_once('MerchantPullPaymentResponseType.php');
include_once('MerchantPullInfoType.php');
include_once('PaymentTransactionSearchResultType.php');
include_once('ShippingInfoType.php');
include_once('TaxInfoType.php');
include_once('MerchantPullPaymentType.php');
include_once('PaymentTransactionType.php');
include_once('ReceiverInfoType.php');
include_once('PayerInfoType.php');
include_once('InstrumentDetailsType.php');
include_once('BMLOfferInfoType.php');
include_once('OfferDetailsType.php');
include_once('PaymentInfoType.php');
include_once('SubscriptionTermsType.php');
include_once('SubscriptionInfoType.php');
include_once('AuctionInfoType.php');
include_once('OptionType.php');
include_once('EbayItemPaymentDetailsItemType.php');
include_once('PaymentDetailsItemType.php');
include_once('PaymentItemType.php');
include_once('PaymentItemInfoType.php');
include_once('OfferCouponInfoType.php');
include_once('PaymentDetailsType.php');
include_once('IncentiveDetailsType.php');
include_once('IncentiveAppliedDetailsType.php');
include_once('SellerDetailsType.php');
include_once('OtherPaymentMethodDetailsType.php');
include_once('BuyerDetailsType.php');
include_once('TaxIdDetailsType.php');
include_once('ThreeDSecureRequestType.php');
include_once('ThreeDSecureResponseType.php');
include_once('ThreeDSecureInfoType.php');
include_once('CreditCardDetailsType.php');
include_once('ShippingOptionType.php');
include_once('UserSelectedOptionType.php');
include_once('CreditCardNumberTypeType.php');
include_once('ReferenceCreditCardDetailsType.php');
include_once('PaymentTransactionCodeType.php');
include_once('PaymentStatusCodeType.php');
include_once('AddressStatusCodeType.php');
include_once('AddressNormalizationStatusCodeType.php');
include_once('PaymentActionCodeType.php');
include_once('FMFPendingTransactionActionType.php');
include_once('ChannelType.php');
include_once('TotalType.php');
include_once('SolutionTypeType.php');
include_once('AllowedPaymentMethodType.php');
include_once('LandingPageType.php');
include_once('BillingCodeType.php');
include_once('ApprovalTypeType.php');
include_once('ApprovalSubTypeType.php');
include_once('PendingStatusCodeType.php');
include_once('ReceiverInfoCodeType.php');
include_once('ReversalReasonCodeType.php');
include_once('POSTransactionCodeType.php');
include_once('PaymentCodeType.php');
include_once('RefundSourceCodeType.php');
include_once('PayPalUserStatusCodeType.php');
include_once('MerchantPullPaymentCodeType.php');
include_once('MerchantPullStatusCodeType.php');
include_once('PaymentTransactionStatusCodeType.php');
include_once('PaymentTransactionClassCodeType.php');
include_once('MatchStatusCodeType.php');
include_once('CompleteCodeType.php');
include_once('TransactionEntityType.php');
include_once('MobileRecipientCodeType.php');
include_once('MobilePaymentCodeType.php');
include_once('CustomSecurityHeaderType.php');
include_once('UserIdPasswordType.php');
include_once('SetCustomerBillingAgreementRequestDetailsType.php');
include_once('GetBillingAgreementCustomerDetailsResponseDetailsType.php');
include_once('DeviceDetailsType.php');
include_once('SenderDetailsType.php');
include_once('DoReferenceTransactionRequestDetailsType.php');
include_once('DoReferenceTransactionResponseDetailsType.php');
include_once('DoNonReferencedCreditRequestDetailsType.php');
include_once('DoNonReferencedCreditResponseDetailsType.php');
include_once('EnterBoardingRequestDetailsType.php');
include_once('MarketingCategoryType.php');
include_once('BusinessInfoType.php');
include_once('BusinessTypeType.php');
include_once('BusinessCategoryType.php');
include_once('BusinessSubCategoryType.php');
include_once('AverageTransactionPriceType.php');
include_once('AverageMonthlyVolumeType.php');
include_once('SalesVenueType.php');
include_once('PercentageRevenueFromOnlineSalesType.php');
include_once('BusinessOwnerInfoType.php');
include_once('BankAccountDetailsType.php');
include_once('BankAccountTypeType.php');
include_once('GetBoardingDetailsResponseDetailsType.php');
include_once('BoardingStatusType.php');
include_once('UserWithdrawalLimitTypeType.php');
include_once('APICredentialsType.php');
include_once('APIAuthenticationType.php');
include_once('SetMobileCheckoutRequestDetailsType.php');
include_once('DoMobileCheckoutPaymentResponseDetailsType.php');
include_once('EbayCheckoutType.php');
include_once('DyneticClientType.php');
include_once('SetEbayMobileCheckoutRequestDetailsType.php');
include_once('UATPDetailsType.php');
include_once('RecurringPaymentsProfileStatusType.php');
include_once('FailedPaymentActionType.php');
include_once('AutoBillType.php');
include_once('StatusChangeActionType.php');
include_once('RecurringPaymentsSummaryType.php');
include_once('ActivationDetailsType.php');
include_once('BillingPeriodType.php');
include_once('BillingPeriodDetailsType.php');
include_once('BillingPeriodDetailsType_Update.php');
include_once('ScheduleDetailsType.php');
include_once('RecurringPaymentsProfileDetailsType.php');
include_once('CreateRecurringPaymentsProfileRequestDetailsType.php');
include_once('CreateRecurringPaymentsProfileResponseDetailsType.php');
include_once('GetRecurringPaymentsProfileDetailsResponseDetailsType.php');
include_once('ManageRecurringPaymentsProfileStatusRequestDetailsType.php');
include_once('ManageRecurringPaymentsProfileStatusResponseDetailsType.php');
include_once('BillOutstandingAmountRequestDetailsType.php');
include_once('BillOutstandingAmountResponseDetailsType.php');
include_once('UpdateRecurringPaymentsProfileRequestDetailsType.php');
include_once('UpdateRecurringPaymentsProfileResponseDetailsType.php');
include_once('RiskFilterDetailsType.php');
include_once('RiskFilterListType.php');
include_once('FMFDetailsType.php');
include_once('ProductCategoryType.php');
include_once('EnhancedDataType.php');
include_once('AirlineItineraryType.php');
include_once('FlightDetailsType.php');
include_once('AuthorizationInfoType.php');
include_once('ButtonCodeType.php');
include_once('ButtonTypeType.php');
include_once('ButtonSubTypeType.php');
include_once('ButtonImageType.php');
include_once('BuyNowTextType.php');
include_once('SubscribeTextType.php');
include_once('ButtonStatusType.php');
include_once('OptionTrackingDetailsType.php');
include_once('ItemTrackingDetailsType.php');
include_once('ButtonSearchResultType.php');
include_once('OptionTypeListType.php');
include_once('ReverseTransactionRequestDetailsType.php');
include_once('ReverseTransactionResponseDetailsType.php');
include_once('UserSelectedFundingSourceType.php');
include_once('ItemCategoryType.php');
include_once('RecurringFlagType.php');
include_once('IncentiveInfoType.php');
include_once('IncentiveApplyIndicationType.php');
include_once('PaymentRequestInfoType.php');
include_once('ExternalRememberMeOwnerDetailsType.php');
include_once('ExternalRememberMeOptInDetailsType.php');
include_once('FlowControlDetailsType.php');
include_once('ExternalRememberMeStatusDetailsType.php');
include_once('RefreshTokenStatusDetailsType.php');
include_once('DisplayControlDetailsType.php');
include_once('ExternalPartnerTrackingDetailsType.php');
include_once('MerchantStoreDetailsType.php');
include_once('AdditionalFeeType.php');
include_once('DiscountType.php');
include_once('InvoiceItemType.php');
include_once('RefundInfoType.php');
include_once('CoupledBucketsType.php');
include_once('CoupleType.php');
include_once('PaymentCategoryType.php');
include_once('LocationType.php');
include_once('CoupledPaymentInfoType.php');
include_once('TupleType.php');
include_once('MerchantDataType.php');
include_once('WalletItemsType.php');
include_once('WalletItemType.php');
include_once('DiscountInfoType.php');
include_once('AmountType.php');
include_once('BasicAmountType.php');
include_once('MeasureType.php');
include_once('QuantityType.php');
include_once('InstallmentDetailsType.php');
include_once('OptionSelectionDetailsType.php');
include_once('OptionDetailsType.php');
include_once('BMCreateButtonReq.php');
include_once('BMCreateButtonRequestType.php');
include_once('BMCreateButtonResponseType.php');
include_once('BMUpdateButtonReq.php');
include_once('BMUpdateButtonRequestType.php');
include_once('BMUpdateButtonResponseType.php');
include_once('BMManageButtonStatusReq.php');
include_once('BMManageButtonStatusRequestType.php');
include_once('BMManageButtonStatusResponseType.php');
include_once('BMGetButtonDetailsReq.php');
include_once('BMGetButtonDetailsRequestType.php');
include_once('BMGetButtonDetailsResponseType.php');
include_once('BMSetInventoryReq.php');
include_once('BMSetInventoryRequestType.php');
include_once('BMSetInventoryResponseType.php');
include_once('BMGetInventoryReq.php');
include_once('BMGetInventoryRequestType.php');
include_once('BMGetInventoryResponseType.php');
include_once('BMButtonSearchReq.php');
include_once('BMButtonSearchRequestType.php');
include_once('BMButtonSearchResponseType.php');
include_once('RefundTransactionReq.php');
include_once('RefundTransactionRequestType.php');
include_once('RefundTransactionResponseType.php');
include_once('InitiateRecoupReq.php');
include_once('InitiateRecoupRequestType.php');
include_once('InitiateRecoupResponseType.php');
include_once('CompleteRecoupReq.php');
include_once('CompleteRecoupRequestType.php');
include_once('CompleteRecoupResponseType.php');
include_once('CancelRecoupReq.php');
include_once('CancelRecoupRequestType.php');
include_once('CancelRecoupResponseType.php');
include_once('GetTransactionDetailsReq.php');
include_once('GetTransactionDetailsRequestType.php');
include_once('GetTransactionDetailsResponseType.php');
include_once('BillUserReq.php');
include_once('BillUserRequestType.php');
include_once('BillUserResponseType.php');
include_once('TransactionSearchReq.php');
include_once('TransactionSearchRequestType.php');
include_once('TransactionSearchResponseType.php');
include_once('MassPayReq.php');
include_once('MassPayRequestType.php');
include_once('MassPayResponseType.php');
include_once('MassPayRequestItemType.php');
include_once('BillAgreementUpdateReq.php');
include_once('BAUpdateRequestType.php');
include_once('BAUpdateResponseType.php');
include_once('AddressVerifyReq.php');
include_once('AddressVerifyRequestType.php');
include_once('AddressVerifyResponseType.php');
include_once('EnterBoardingReq.php');
include_once('EnterBoardingRequestType.php');
include_once('EnterBoardingResponseType.php');
include_once('GetBoardingDetailsReq.php');
include_once('GetBoardingDetailsRequestType.php');
include_once('GetBoardingDetailsResponseType.php');
include_once('SetAuthFlowParamReq.php');
include_once('SetAuthFlowParamRequestType.php');
include_once('SetAuthFlowParamResponseType.php');
include_once('GetAuthDetailsReq.php');
include_once('GetAuthDetailsRequestType.php');
include_once('GetAuthDetailsResponseType.php');
include_once('SetAccessPermissionsReq.php');
include_once('SetAccessPermissionsRequestType.php');
include_once('SetAccessPermissionsResponseType.php');
include_once('UpdateAccessPermissionsReq.php');
include_once('UpdateAccessPermissionsRequestType.php');
include_once('UpdateAccessPermissionsResponseType.php');
include_once('GetAccessPermissionDetailsReq.php');
include_once('GetAccessPermissionDetailsRequestType.php');
include_once('GetAccessPermissionDetailsResponseType.php');
include_once('GetIncentiveEvaluationReq.php');
include_once('GetIncentiveEvaluationRequestType.php');
include_once('GetIncentiveEvaluationResponseType.php');
include_once('SetExpressCheckoutReq.php');
include_once('SetExpressCheckoutRequestType.php');
include_once('SetExpressCheckoutResponseType.php');
include_once('ExecuteCheckoutOperationsReq.php');
include_once('ExecuteCheckoutOperationsRequestType.php');
include_once('ExecuteCheckoutOperationsResponseType.php');
include_once('GetExpressCheckoutDetailsReq.php');
include_once('GetExpressCheckoutDetailsRequestType.php');
include_once('GetExpressCheckoutDetailsResponseType.php');
include_once('DoExpressCheckoutPaymentReq.php');
include_once('DoExpressCheckoutPaymentRequestType.php');
include_once('DoExpressCheckoutPaymentResponseType.php');
include_once('DoUATPExpressCheckoutPaymentReq.php');
include_once('DoUATPExpressCheckoutPaymentRequestType.php');
include_once('DoUATPExpressCheckoutPaymentResponseType.php');
include_once('ManagePendingTransactionStatusReq.php');
include_once('ManagePendingTransactionStatusRequestType.php');
include_once('ManagePendingTransactionStatusResponseType.php');
include_once('DoDirectPaymentReq.php');
include_once('DoDirectPaymentRequestType.php');
include_once('DoDirectPaymentResponseType.php');
include_once('DoCancelReq.php');
include_once('DoCancelRequestType.php');
include_once('DoCancelResponseType.php');
include_once('DoCaptureReq.php');
include_once('DoCaptureRequestType.php');
include_once('DoCaptureResponseType.php');
include_once('DoReauthorizationReq.php');
include_once('DoReauthorizationRequestType.php');
include_once('DoReauthorizationResponseType.php');
include_once('DoVoidReq.php');
include_once('DoVoidRequestType.php');
include_once('DoVoidResponseType.php');
include_once('DoAuthorizationReq.php');
include_once('DoAuthorizationRequestType.php');
include_once('DoAuthorizationResponseType.php');
include_once('UpdateAuthorizationReq.php');
include_once('UpdateAuthorizationRequestType.php');
include_once('UpdateAuthorizationResponseType.php');
include_once('DoUATPAuthorizationReq.php');
include_once('DoUATPAuthorizationRequestType.php');
include_once('DoUATPAuthorizationResponseType.php');
include_once('CreateMobilePaymentReq.php');
include_once('CreateMobilePaymentRequestType.php');
include_once('CreateMobilePaymentResponseType.php');
include_once('GetMobileStatusReq.php');
include_once('GetMobileStatusRequestType.php');
include_once('GetMobileStatusResponseType.php');
include_once('SetMobileCheckoutReq.php');
include_once('SetMobileCheckoutRequestType.php');
include_once('SetMobileCheckoutResponseType.php');
include_once('DoMobileCheckoutPaymentReq.php');
include_once('DoMobileCheckoutPaymentRequestType.php');
include_once('DoMobileCheckoutPaymentResponseType.php');
include_once('GetBalanceReq.php');
include_once('GetBalanceRequestType.php');
include_once('GetBalanceResponseType.php');
include_once('SetCustomerBillingAgreementReq.php');
include_once('SetCustomerBillingAgreementRequestType.php');
include_once('SetCustomerBillingAgreementResponseType.php');
include_once('GetBillingAgreementCustomerDetailsReq.php');
include_once('GetBillingAgreementCustomerDetailsRequestType.php');
include_once('GetBillingAgreementCustomerDetailsResponseType.php');
include_once('CreateBillingAgreementReq.php');
include_once('CreateBillingAgreementRequestType.php');
include_once('CreateBillingAgreementResponseType.php');
include_once('DoReferenceTransactionReq.php');
include_once('DoReferenceTransactionRequestType.php');
include_once('DoReferenceTransactionResponseType.php');
include_once('DoNonReferencedCreditReq.php');
include_once('DoNonReferencedCreditRequestType.php');
include_once('DoNonReferencedCreditResponseType.php');
include_once('CreateRecurringPaymentsProfileReq.php');
include_once('CreateRecurringPaymentsProfileRequestType.php');
include_once('CreateRecurringPaymentsProfileResponseType.php');
include_once('GetRecurringPaymentsProfileDetailsReq.php');
include_once('GetRecurringPaymentsProfileDetailsRequestType.php');
include_once('GetRecurringPaymentsProfileDetailsResponseType.php');
include_once('ManageRecurringPaymentsProfileStatusReq.php');
include_once('ManageRecurringPaymentsProfileStatusRequestType.php');
include_once('ManageRecurringPaymentsProfileStatusResponseType.php');
include_once('BillOutstandingAmountReq.php');
include_once('BillOutstandingAmountRequestType.php');
include_once('BillOutstandingAmountResponseType.php');
include_once('UpdateRecurringPaymentsProfileReq.php');
include_once('UpdateRecurringPaymentsProfileRequestType.php');
include_once('UpdateRecurringPaymentsProfileResponseType.php');
include_once('GetPalDetailsReq.php');
include_once('GetPalDetailsRequestType.php');
include_once('GetPalDetailsResponseType.php');
include_once('ReverseTransactionReq.php');
include_once('ReverseTransactionRequestType.php');
include_once('ReverseTransactionResponseType.php');
include_once('ExternalRememberMeOptOutReq.php');
include_once('ExternalRememberMeOptOutRequestType.php');
include_once('ExternalRememberMeOptOutResponseType.php');

class PayPalAPIInterfaceService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
      'EnhancedCheckoutDataType' => 'Paypal\Api\EnhancedCheckoutDataType',
      'EnhancedPaymentDataType' => 'Paypal\Api\EnhancedPaymentDataType',
      'EnhancedItemDataType' => 'Paypal\Api\EnhancedItemDataType',
      'EnhancedPaymentInfoType' => 'Paypal\Api\EnhancedPaymentInfoType',
      'EnhancedInitiateRecoupRequestDetailsType' => 'Paypal\Api\EnhancedInitiateRecoupRequestDetailsType',
      'EnhancedCompleteRecoupRequestDetailsType' => 'Paypal\Api\EnhancedCompleteRecoupRequestDetailsType',
      'EnhancedCompleteRecoupResponseDetailsType' => 'Paypal\Api\EnhancedCompleteRecoupResponseDetailsType',
      'EnhancedCancelRecoupRequestDetailsType' => 'Paypal\Api\EnhancedCancelRecoupRequestDetailsType',
      'EnhancedPayerInfoType' => 'Paypal\Api\EnhancedPayerInfoType',
      'AccountEntryType' => 'Paypal\Api\AccountEntryType',
      'AdditionalAccountType' => 'Paypal\Api\AdditionalAccountType',
      'PromotedItemType' => 'Paypal\Api\PromotedItemType',
      'CrossPromotionsType' => 'Paypal\Api\CrossPromotionsType',
      'AccountSummaryType' => 'Paypal\Api\AccountSummaryType',
      'BuyerType' => 'Paypal\Api\BuyerType',
      'SellerType' => 'Paypal\Api\SellerType',
      'FeeType' => 'Paypal\Api\FeeType',
      'FeesType' => 'Paypal\Api\FeesType',
      'ShippingCarrierDetailsType' => 'Paypal\Api\ShippingCarrierDetailsType',
      'CalculatedShippingRateType' => 'Paypal\Api\CalculatedShippingRateType',
      'FlatShippingRateType' => 'Paypal\Api\FlatShippingRateType',
      'SalesTaxType' => 'Paypal\Api\SalesTaxType',
      'ShippingDetailsType' => 'Paypal\Api\ShippingDetailsType',
      'SiteHostedPictureType' => 'Paypal\Api\SiteHostedPictureType',
      'VendorHostedPictureType' => 'Paypal\Api\VendorHostedPictureType',
      'ValType' => 'Paypal\Api\ValType',
      'AttributeType' => 'Paypal\Api\AttributeType',
      'AttributeSetType' => 'Paypal\Api\AttributeSetType',
      'ListOfAttributeSetType' => 'Paypal\Api\ListOfAttributeSetType',
      'CategoryType' => 'Paypal\Api\CategoryType',
      'StorefrontType' => 'Paypal\Api\StorefrontType',
      'ListingDesignerType' => 'Paypal\Api\ListingDesignerType',
      'CharityType' => 'Paypal\Api\CharityType',
      'SellingStatusType' => 'Paypal\Api\SellingStatusType',
      'ReviseStatusType' => 'Paypal\Api\ReviseStatusType',
      'ListingDetailsType' => 'Paypal\Api\ListingDetailsType',
      'ItemType' => 'Paypal\Api\ItemType',
      'TransactionsType' => 'Paypal\Api\TransactionsType',
      'TransactionType' => 'Paypal\Api\TransactionType',
      'PaymentMeansType' => 'Paypal\Api\PaymentMeansType',
      'PaymentType' => 'Paypal\Api\PaymentType',
      'TransactionStatusType' => 'Paypal\Api\TransactionStatusType',
      'UserType' => 'Paypal\Api\UserType',
      'VATDetailsType' => 'Paypal\Api\VATDetailsType',
      'SchedulingInfoType' => 'Paypal\Api\SchedulingInfoType',
      'ItemArrayType' => 'Paypal\Api\ItemArrayType',
      'CategoryArrayType' => 'Paypal\Api\CategoryArrayType',
      'PaginationType' => 'Paypal\Api\PaginationType',
      'ModifiedFieldType' => 'Paypal\Api\ModifiedFieldType',
      'PaginationResultType' => 'Paypal\Api\PaginationResultType',
      'ErrorParameterType' => 'Paypal\Api\ErrorParameterType',
      'ErrorType' => 'Paypal\Api\ErrorType',
      'FaultDetailsType' => 'Paypal\Api\FaultDetailsType',
      'AbstractRequestType' => 'Paypal\Api\AbstractRequestType',
      'AbstractResponseType' => 'Paypal\Api\AbstractResponseType',
      'PhoneNumberType' => 'Paypal\Api\PhoneNumberType',
      'AddressType' => 'Paypal\Api\AddressType',
      'PersonNameType' => 'Paypal\Api\PersonNameType',
      'IncentiveAppliedToType' => 'Paypal\Api\IncentiveAppliedToType',
      'IncentiveDetailType' => 'Paypal\Api\IncentiveDetailType',
      'IncentiveItemType' => 'Paypal\Api\IncentiveItemType',
      'IncentiveBucketType' => 'Paypal\Api\IncentiveBucketType',
      'IncentiveRequestDetailsType' => 'Paypal\Api\IncentiveRequestDetailsType',
      'GetIncentiveEvaluationRequestDetailsType' => 'Paypal\Api\GetIncentiveEvaluationRequestDetailsType',
      'GetIncentiveEvaluationResponseDetailsType' => 'Paypal\Api\GetIncentiveEvaluationResponseDetailsType',
      'SetExpressCheckoutRequestDetailsType' => 'Paypal\Api\SetExpressCheckoutRequestDetailsType',
      'ExecuteCheckoutOperationsRequestDetailsType' => 'Paypal\Api\ExecuteCheckoutOperationsRequestDetailsType',
      'SetDataRequestType' => 'Paypal\Api\SetDataRequestType',
      'AuthorizationRequestType' => 'Paypal\Api\AuthorizationRequestType',
      'BillingApprovalDetailsType' => 'Paypal\Api\BillingApprovalDetailsType',
      'InfoSharingDirectivesType' => 'Paypal\Api\InfoSharingDirectivesType',
      'OrderDetailsType' => 'Paypal\Api\OrderDetailsType',
      'PaymentDirectivesType' => 'Paypal\Api\PaymentDirectivesType',
      'BuyerDetailType' => 'Paypal\Api\BuyerDetailType',
      'IdentificationInfoType' => 'Paypal\Api\IdentificationInfoType',
      'MobileIDInfoType' => 'Paypal\Api\MobileIDInfoType',
      'RememberMeIDInfoType' => 'Paypal\Api\RememberMeIDInfoType',
      'IdentityTokenInfoType' => 'Paypal\Api\IdentityTokenInfoType',
      'FundingSourceDetailsType' => 'Paypal\Api\FundingSourceDetailsType',
      'BillingAgreementDetailsType' => 'Paypal\Api\BillingAgreementDetailsType',
      'GetExpressCheckoutDetailsResponseDetailsType' => 'Paypal\Api\GetExpressCheckoutDetailsResponseDetailsType',
      'ExecuteCheckoutOperationsResponseDetailsType' => 'Paypal\Api\ExecuteCheckoutOperationsResponseDetailsType',
      'SetDataResponseType' => 'Paypal\Api\SetDataResponseType',
      'AuthorizationResponseType' => 'Paypal\Api\AuthorizationResponseType',
      'DoExpressCheckoutPaymentRequestDetailsType' => 'Paypal\Api\DoExpressCheckoutPaymentRequestDetailsType',
      'DoExpressCheckoutPaymentResponseDetailsType' => 'Paypal\Api\DoExpressCheckoutPaymentResponseDetailsType',
      'DoCaptureResponseDetailsType' => 'Paypal\Api\DoCaptureResponseDetailsType',
      'DoDirectPaymentRequestDetailsType' => 'Paypal\Api\DoDirectPaymentRequestDetailsType',
      'CreateMobilePaymentRequestDetailsType' => 'Paypal\Api\CreateMobilePaymentRequestDetailsType',
      'GetMobileStatusRequestDetailsType' => 'Paypal\Api\GetMobileStatusRequestDetailsType',
      'SetAuthFlowParamRequestDetailsType' => 'Paypal\Api\SetAuthFlowParamRequestDetailsType',
      'GetAuthDetailsResponseDetailsType' => 'Paypal\Api\GetAuthDetailsResponseDetailsType',
      'SetAccessPermissionsRequestDetailsType' => 'Paypal\Api\SetAccessPermissionsRequestDetailsType',
      'GetAccessPermissionDetailsResponseDetailsType' => 'Paypal\Api\GetAccessPermissionDetailsResponseDetailsType',
      'BAUpdateResponseDetailsType' => 'Paypal\Api\BAUpdateResponseDetailsType',
      'MerchantPullPaymentResponseType' => 'Paypal\Api\MerchantPullPaymentResponseType',
      'MerchantPullInfoType' => 'Paypal\Api\MerchantPullInfoType',
      'PaymentTransactionSearchResultType' => 'Paypal\Api\PaymentTransactionSearchResultType',
      'ShippingInfoType' => 'Paypal\Api\ShippingInfoType',
      'TaxInfoType' => 'Paypal\Api\TaxInfoType',
      'MerchantPullPaymentType' => 'Paypal\Api\MerchantPullPaymentType',
      'PaymentTransactionType' => 'Paypal\Api\PaymentTransactionType',
      'ReceiverInfoType' => 'Paypal\Api\ReceiverInfoType',
      'PayerInfoType' => 'Paypal\Api\PayerInfoType',
      'InstrumentDetailsType' => 'Paypal\Api\InstrumentDetailsType',
      'BMLOfferInfoType' => 'Paypal\Api\BMLOfferInfoType',
      'OfferDetailsType' => 'Paypal\Api\OfferDetailsType',
      'PaymentInfoType' => 'Paypal\Api\PaymentInfoType',
      'SubscriptionTermsType' => 'Paypal\Api\SubscriptionTermsType',
      'SubscriptionInfoType' => 'Paypal\Api\SubscriptionInfoType',
      'AuctionInfoType' => 'Paypal\Api\AuctionInfoType',
      'OptionType' => 'Paypal\Api\OptionType',
      'EbayItemPaymentDetailsItemType' => 'Paypal\Api\EbayItemPaymentDetailsItemType',
      'PaymentDetailsItemType' => 'Paypal\Api\PaymentDetailsItemType',
      'PaymentItemType' => 'Paypal\Api\PaymentItemType',
      'PaymentItemInfoType' => 'Paypal\Api\PaymentItemInfoType',
      'OfferCouponInfoType' => 'Paypal\Api\OfferCouponInfoType',
      'PaymentDetailsType' => 'Paypal\Api\PaymentDetailsType',
      'IncentiveDetailsType' => 'Paypal\Api\IncentiveDetailsType',
      'IncentiveAppliedDetailsType' => 'Paypal\Api\IncentiveAppliedDetailsType',
      'SellerDetailsType' => 'Paypal\Api\SellerDetailsType',
      'OtherPaymentMethodDetailsType' => 'Paypal\Api\OtherPaymentMethodDetailsType',
      'BuyerDetailsType' => 'Paypal\Api\BuyerDetailsType',
      'TaxIdDetailsType' => 'Paypal\Api\TaxIdDetailsType',
      'ThreeDSecureRequestType' => 'Paypal\Api\ThreeDSecureRequestType',
      'ThreeDSecureResponseType' => 'Paypal\Api\ThreeDSecureResponseType',
      'ThreeDSecureInfoType' => 'Paypal\Api\ThreeDSecureInfoType',
      'CreditCardDetailsType' => 'Paypal\Api\CreditCardDetailsType',
      'ShippingOptionType' => 'Paypal\Api\ShippingOptionType',
      'UserSelectedOptionType' => 'Paypal\Api\UserSelectedOptionType',
      'CreditCardNumberTypeType' => 'Paypal\Api\CreditCardNumberTypeType',
      'ReferenceCreditCardDetailsType' => 'Paypal\Api\ReferenceCreditCardDetailsType',
      'CustomSecurityHeaderType' => 'Paypal\Api\CustomSecurityHeaderType',
      'UserIdPasswordType' => 'Paypal\Api\UserIdPasswordType',
      'SetCustomerBillingAgreementRequestDetailsType' => 'Paypal\Api\SetCustomerBillingAgreementRequestDetailsType',
      'GetBillingAgreementCustomerDetailsResponseDetailsType' => 'Paypal\Api\GetBillingAgreementCustomerDetailsResponseDetailsType',
      'DeviceDetailsType' => 'Paypal\Api\DeviceDetailsType',
      'SenderDetailsType' => 'Paypal\Api\SenderDetailsType',
      'DoReferenceTransactionRequestDetailsType' => 'Paypal\Api\DoReferenceTransactionRequestDetailsType',
      'DoReferenceTransactionResponseDetailsType' => 'Paypal\Api\DoReferenceTransactionResponseDetailsType',
      'DoNonReferencedCreditRequestDetailsType' => 'Paypal\Api\DoNonReferencedCreditRequestDetailsType',
      'DoNonReferencedCreditResponseDetailsType' => 'Paypal\Api\DoNonReferencedCreditResponseDetailsType',
      'EnterBoardingRequestDetailsType' => 'Paypal\Api\EnterBoardingRequestDetailsType',
      'BusinessInfoType' => 'Paypal\Api\BusinessInfoType',
      'BusinessOwnerInfoType' => 'Paypal\Api\BusinessOwnerInfoType',
      'BankAccountDetailsType' => 'Paypal\Api\BankAccountDetailsType',
      'GetBoardingDetailsResponseDetailsType' => 'Paypal\Api\GetBoardingDetailsResponseDetailsType',
      'APICredentialsType' => 'Paypal\Api\APICredentialsType',
      'SetMobileCheckoutRequestDetailsType' => 'Paypal\Api\SetMobileCheckoutRequestDetailsType',
      'DoMobileCheckoutPaymentResponseDetailsType' => 'Paypal\Api\DoMobileCheckoutPaymentResponseDetailsType',
      'SetEbayMobileCheckoutRequestDetailsType' => 'Paypal\Api\SetEbayMobileCheckoutRequestDetailsType',
      'UATPDetailsType' => 'Paypal\Api\UATPDetailsType',
      'RecurringPaymentsSummaryType' => 'Paypal\Api\RecurringPaymentsSummaryType',
      'ActivationDetailsType' => 'Paypal\Api\ActivationDetailsType',
      'BillingPeriodDetailsType' => 'Paypal\Api\BillingPeriodDetailsType',
      'BillingPeriodDetailsType_Update' => 'Paypal\Api\BillingPeriodDetailsType_Update',
      'ScheduleDetailsType' => 'Paypal\Api\ScheduleDetailsType',
      'RecurringPaymentsProfileDetailsType' => 'Paypal\Api\RecurringPaymentsProfileDetailsType',
      'CreateRecurringPaymentsProfileRequestDetailsType' => 'Paypal\Api\CreateRecurringPaymentsProfileRequestDetailsType',
      'CreateRecurringPaymentsProfileResponseDetailsType' => 'Paypal\Api\CreateRecurringPaymentsProfileResponseDetailsType',
      'GetRecurringPaymentsProfileDetailsResponseDetailsType' => 'Paypal\Api\GetRecurringPaymentsProfileDetailsResponseDetailsType',
      'ManageRecurringPaymentsProfileStatusRequestDetailsType' => 'Paypal\Api\ManageRecurringPaymentsProfileStatusRequestDetailsType',
      'ManageRecurringPaymentsProfileStatusResponseDetailsType' => 'Paypal\Api\ManageRecurringPaymentsProfileStatusResponseDetailsType',
      'BillOutstandingAmountRequestDetailsType' => 'Paypal\Api\BillOutstandingAmountRequestDetailsType',
      'BillOutstandingAmountResponseDetailsType' => 'Paypal\Api\BillOutstandingAmountResponseDetailsType',
      'UpdateRecurringPaymentsProfileRequestDetailsType' => 'Paypal\Api\UpdateRecurringPaymentsProfileRequestDetailsType',
      'UpdateRecurringPaymentsProfileResponseDetailsType' => 'Paypal\Api\UpdateRecurringPaymentsProfileResponseDetailsType',
      'RiskFilterDetailsType' => 'Paypal\Api\RiskFilterDetailsType',
      'RiskFilterListType' => 'Paypal\Api\RiskFilterListType',
      'FMFDetailsType' => 'Paypal\Api\FMFDetailsType',
      'EnhancedDataType' => 'Paypal\Api\EnhancedDataType',
      'AirlineItineraryType' => 'Paypal\Api\AirlineItineraryType',
      'FlightDetailsType' => 'Paypal\Api\FlightDetailsType',
      'AuthorizationInfoType' => 'Paypal\Api\AuthorizationInfoType',
      'OptionTrackingDetailsType' => 'Paypal\Api\OptionTrackingDetailsType',
      'ItemTrackingDetailsType' => 'Paypal\Api\ItemTrackingDetailsType',
      'ButtonSearchResultType' => 'Paypal\Api\ButtonSearchResultType',
      'ReverseTransactionRequestDetailsType' => 'Paypal\Api\ReverseTransactionRequestDetailsType',
      'ReverseTransactionResponseDetailsType' => 'Paypal\Api\ReverseTransactionResponseDetailsType',
      'IncentiveInfoType' => 'Paypal\Api\IncentiveInfoType',
      'IncentiveApplyIndicationType' => 'Paypal\Api\IncentiveApplyIndicationType',
      'PaymentRequestInfoType' => 'Paypal\Api\PaymentRequestInfoType',
      'ExternalRememberMeOwnerDetailsType' => 'Paypal\Api\ExternalRememberMeOwnerDetailsType',
      'ExternalRememberMeOptInDetailsType' => 'Paypal\Api\ExternalRememberMeOptInDetailsType',
      'FlowControlDetailsType' => 'Paypal\Api\FlowControlDetailsType',
      'ExternalRememberMeStatusDetailsType' => 'Paypal\Api\ExternalRememberMeStatusDetailsType',
      'RefreshTokenStatusDetailsType' => 'Paypal\Api\RefreshTokenStatusDetailsType',
      'DisplayControlDetailsType' => 'Paypal\Api\DisplayControlDetailsType',
      'ExternalPartnerTrackingDetailsType' => 'Paypal\Api\ExternalPartnerTrackingDetailsType',
      'MerchantStoreDetailsType' => 'Paypal\Api\MerchantStoreDetailsType',
      'AdditionalFeeType' => 'Paypal\Api\AdditionalFeeType',
      'DiscountType' => 'Paypal\Api\DiscountType',
      'InvoiceItemType' => 'Paypal\Api\InvoiceItemType',
      'RefundInfoType' => 'Paypal\Api\RefundInfoType',
      'CoupledBucketsType' => 'Paypal\Api\CoupledBucketsType',
      'CoupledPaymentInfoType' => 'Paypal\Api\CoupledPaymentInfoType',
      'TupleType' => 'Paypal\Api\TupleType',
      'MerchantDataType' => 'Paypal\Api\MerchantDataType',
      'WalletItemsType' => 'Paypal\Api\WalletItemsType',
      'DiscountInfoType' => 'Paypal\Api\DiscountInfoType',
      'AmountType' => 'Paypal\Api\AmountType',
      'BasicAmountType' => 'Paypal\Api\BasicAmountType',
      'MeasureType' => 'Paypal\Api\MeasureType',
      'QuantityType' => 'Paypal\Api\QuantityType',
      'InstallmentDetailsType' => 'Paypal\Api\InstallmentDetailsType',
      'OptionSelectionDetailsType' => 'Paypal\Api\OptionSelectionDetailsType',
      'OptionDetailsType' => 'Paypal\Api\OptionDetailsType',
      'BMCreateButtonReq' => 'Paypal\Api\BMCreateButtonReq',
      'BMCreateButtonRequestType' => 'Paypal\Api\BMCreateButtonRequestType',
      'BMCreateButtonResponseType' => 'Paypal\Api\BMCreateButtonResponseType',
      'BMUpdateButtonReq' => 'Paypal\Api\BMUpdateButtonReq',
      'BMUpdateButtonRequestType' => 'Paypal\Api\BMUpdateButtonRequestType',
      'BMUpdateButtonResponseType' => 'Paypal\Api\BMUpdateButtonResponseType',
      'BMManageButtonStatusReq' => 'Paypal\Api\BMManageButtonStatusReq',
      'BMManageButtonStatusRequestType' => 'Paypal\Api\BMManageButtonStatusRequestType',
      'BMManageButtonStatusResponseType' => 'Paypal\Api\BMManageButtonStatusResponseType',
      'BMGetButtonDetailsReq' => 'Paypal\Api\BMGetButtonDetailsReq',
      'BMGetButtonDetailsRequestType' => 'Paypal\Api\BMGetButtonDetailsRequestType',
      'BMGetButtonDetailsResponseType' => 'Paypal\Api\BMGetButtonDetailsResponseType',
      'BMSetInventoryReq' => 'Paypal\Api\BMSetInventoryReq',
      'BMSetInventoryRequestType' => 'Paypal\Api\BMSetInventoryRequestType',
      'BMSetInventoryResponseType' => 'Paypal\Api\BMSetInventoryResponseType',
      'BMGetInventoryReq' => 'Paypal\Api\BMGetInventoryReq',
      'BMGetInventoryRequestType' => 'Paypal\Api\BMGetInventoryRequestType',
      'BMGetInventoryResponseType' => 'Paypal\Api\BMGetInventoryResponseType',
      'BMButtonSearchReq' => 'Paypal\Api\BMButtonSearchReq',
      'BMButtonSearchRequestType' => 'Paypal\Api\BMButtonSearchRequestType',
      'BMButtonSearchResponseType' => 'Paypal\Api\BMButtonSearchResponseType',
      'RefundTransactionReq' => 'Paypal\Api\RefundTransactionReq',
      'RefundTransactionRequestType' => 'Paypal\Api\RefundTransactionRequestType',
      'RefundTransactionResponseType' => 'Paypal\Api\RefundTransactionResponseType',
      'InitiateRecoupReq' => 'Paypal\Api\InitiateRecoupReq',
      'InitiateRecoupRequestType' => 'Paypal\Api\InitiateRecoupRequestType',
      'InitiateRecoupResponseType' => 'Paypal\Api\InitiateRecoupResponseType',
      'CompleteRecoupReq' => 'Paypal\Api\CompleteRecoupReq',
      'CompleteRecoupRequestType' => 'Paypal\Api\CompleteRecoupRequestType',
      'CompleteRecoupResponseType' => 'Paypal\Api\CompleteRecoupResponseType',
      'CancelRecoupReq' => 'Paypal\Api\CancelRecoupReq',
      'CancelRecoupRequestType' => 'Paypal\Api\CancelRecoupRequestType',
      'CancelRecoupResponseType' => 'Paypal\Api\CancelRecoupResponseType',
      'GetTransactionDetailsReq' => 'Paypal\Api\GetTransactionDetailsReq',
      'GetTransactionDetailsRequestType' => 'Paypal\Api\GetTransactionDetailsRequestType',
      'GetTransactionDetailsResponseType' => 'Paypal\Api\GetTransactionDetailsResponseType',
      'BillUserReq' => 'Paypal\Api\BillUserReq',
      'BillUserRequestType' => 'Paypal\Api\BillUserRequestType',
      'BillUserResponseType' => 'Paypal\Api\BillUserResponseType',
      'TransactionSearchReq' => 'Paypal\Api\TransactionSearchReq',
      'TransactionSearchRequestType' => 'Paypal\Api\TransactionSearchRequestType',
      'TransactionSearchResponseType' => 'Paypal\Api\TransactionSearchResponseType',
      'MassPayReq' => 'Paypal\Api\MassPayReq',
      'MassPayRequestType' => 'Paypal\Api\MassPayRequestType',
      'MassPayResponseType' => 'Paypal\Api\MassPayResponseType',
      'MassPayRequestItemType' => 'Paypal\Api\MassPayRequestItemType',
      'BillAgreementUpdateReq' => 'Paypal\Api\BillAgreementUpdateReq',
      'BAUpdateRequestType' => 'Paypal\Api\BAUpdateRequestType',
      'BAUpdateResponseType' => 'Paypal\Api\BAUpdateResponseType',
      'AddressVerifyReq' => 'Paypal\Api\AddressVerifyReq',
      'AddressVerifyRequestType' => 'Paypal\Api\AddressVerifyRequestType',
      'AddressVerifyResponseType' => 'Paypal\Api\AddressVerifyResponseType',
      'EnterBoardingReq' => 'Paypal\Api\EnterBoardingReq',
      'EnterBoardingRequestType' => 'Paypal\Api\EnterBoardingRequestType',
      'EnterBoardingResponseType' => 'Paypal\Api\EnterBoardingResponseType',
      'GetBoardingDetailsReq' => 'Paypal\Api\GetBoardingDetailsReq',
      'GetBoardingDetailsRequestType' => 'Paypal\Api\GetBoardingDetailsRequestType',
      'GetBoardingDetailsResponseType' => 'Paypal\Api\GetBoardingDetailsResponseType',
      'SetAuthFlowParamReq' => 'Paypal\Api\SetAuthFlowParamReq',
      'SetAuthFlowParamRequestType' => 'Paypal\Api\SetAuthFlowParamRequestType',
      'SetAuthFlowParamResponseType' => 'Paypal\Api\SetAuthFlowParamResponseType',
      'GetAuthDetailsReq' => 'Paypal\Api\GetAuthDetailsReq',
      'GetAuthDetailsRequestType' => 'Paypal\Api\GetAuthDetailsRequestType',
      'GetAuthDetailsResponseType' => 'Paypal\Api\GetAuthDetailsResponseType',
      'SetAccessPermissionsReq' => 'Paypal\Api\SetAccessPermissionsReq',
      'SetAccessPermissionsRequestType' => 'Paypal\Api\SetAccessPermissionsRequestType',
      'SetAccessPermissionsResponseType' => 'Paypal\Api\SetAccessPermissionsResponseType',
      'UpdateAccessPermissionsReq' => 'Paypal\Api\UpdateAccessPermissionsReq',
      'UpdateAccessPermissionsRequestType' => 'Paypal\Api\UpdateAccessPermissionsRequestType',
      'UpdateAccessPermissionsResponseType' => 'Paypal\Api\UpdateAccessPermissionsResponseType',
      'GetAccessPermissionDetailsReq' => 'Paypal\Api\GetAccessPermissionDetailsReq',
      'GetAccessPermissionDetailsRequestType' => 'Paypal\Api\GetAccessPermissionDetailsRequestType',
      'GetAccessPermissionDetailsResponseType' => 'Paypal\Api\GetAccessPermissionDetailsResponseType',
      'GetIncentiveEvaluationReq' => 'Paypal\Api\GetIncentiveEvaluationReq',
      'GetIncentiveEvaluationRequestType' => 'Paypal\Api\GetIncentiveEvaluationRequestType',
      'GetIncentiveEvaluationResponseType' => 'Paypal\Api\GetIncentiveEvaluationResponseType',
      'SetExpressCheckoutReq' => 'Paypal\Api\SetExpressCheckoutReq',
      'SetExpressCheckoutRequestType' => 'Paypal\Api\SetExpressCheckoutRequestType',
      'SetExpressCheckoutResponseType' => 'Paypal\Api\SetExpressCheckoutResponseType',
      'ExecuteCheckoutOperationsReq' => 'Paypal\Api\ExecuteCheckoutOperationsReq',
      'ExecuteCheckoutOperationsRequestType' => 'Paypal\Api\ExecuteCheckoutOperationsRequestType',
      'ExecuteCheckoutOperationsResponseType' => 'Paypal\Api\ExecuteCheckoutOperationsResponseType',
      'GetExpressCheckoutDetailsReq' => 'Paypal\Api\GetExpressCheckoutDetailsReq',
      'GetExpressCheckoutDetailsRequestType' => 'Paypal\Api\GetExpressCheckoutDetailsRequestType',
      'GetExpressCheckoutDetailsResponseType' => 'Paypal\Api\GetExpressCheckoutDetailsResponseType',
      'DoExpressCheckoutPaymentReq' => 'Paypal\Api\DoExpressCheckoutPaymentReq',
      'DoExpressCheckoutPaymentRequestType' => 'Paypal\Api\DoExpressCheckoutPaymentRequestType',
      'DoExpressCheckoutPaymentResponseType' => 'Paypal\Api\DoExpressCheckoutPaymentResponseType',
      'DoUATPExpressCheckoutPaymentReq' => 'Paypal\Api\DoUATPExpressCheckoutPaymentReq',
      'DoUATPExpressCheckoutPaymentRequestType' => 'Paypal\Api\DoUATPExpressCheckoutPaymentRequestType',
      'DoUATPExpressCheckoutPaymentResponseType' => 'Paypal\Api\DoUATPExpressCheckoutPaymentResponseType',
      'ManagePendingTransactionStatusReq' => 'Paypal\Api\ManagePendingTransactionStatusReq',
      'ManagePendingTransactionStatusRequestType' => 'Paypal\Api\ManagePendingTransactionStatusRequestType',
      'ManagePendingTransactionStatusResponseType' => 'Paypal\Api\ManagePendingTransactionStatusResponseType',
      'DoDirectPaymentReq' => 'Paypal\Api\DoDirectPaymentReq',
      'DoDirectPaymentRequestType' => 'Paypal\Api\DoDirectPaymentRequestType',
      'DoDirectPaymentResponseType' => 'Paypal\Api\DoDirectPaymentResponseType',
      'DoCancelReq' => 'Paypal\Api\DoCancelReq',
      'DoCancelRequestType' => 'Paypal\Api\DoCancelRequestType',
      'DoCancelResponseType' => 'Paypal\Api\DoCancelResponseType',
      'DoCaptureReq' => 'Paypal\Api\DoCaptureReq',
      'DoCaptureRequestType' => 'Paypal\Api\DoCaptureRequestType',
      'DoCaptureResponseType' => 'Paypal\Api\DoCaptureResponseType',
      'DoReauthorizationReq' => 'Paypal\Api\DoReauthorizationReq',
      'DoReauthorizationRequestType' => 'Paypal\Api\DoReauthorizationRequestType',
      'DoReauthorizationResponseType' => 'Paypal\Api\DoReauthorizationResponseType',
      'DoVoidReq' => 'Paypal\Api\DoVoidReq',
      'DoVoidRequestType' => 'Paypal\Api\DoVoidRequestType',
      'DoVoidResponseType' => 'Paypal\Api\DoVoidResponseType',
      'DoAuthorizationReq' => 'Paypal\Api\DoAuthorizationReq',
      'DoAuthorizationRequestType' => 'Paypal\Api\DoAuthorizationRequestType',
      'DoAuthorizationResponseType' => 'Paypal\Api\DoAuthorizationResponseType',
      'UpdateAuthorizationReq' => 'Paypal\Api\UpdateAuthorizationReq',
      'UpdateAuthorizationRequestType' => 'Paypal\Api\UpdateAuthorizationRequestType',
      'UpdateAuthorizationResponseType' => 'Paypal\Api\UpdateAuthorizationResponseType',
      'DoUATPAuthorizationReq' => 'Paypal\Api\DoUATPAuthorizationReq',
      'DoUATPAuthorizationRequestType' => 'Paypal\Api\DoUATPAuthorizationRequestType',
      'DoUATPAuthorizationResponseType' => 'Paypal\Api\DoUATPAuthorizationResponseType',
      'CreateMobilePaymentReq' => 'Paypal\Api\CreateMobilePaymentReq',
      'CreateMobilePaymentRequestType' => 'Paypal\Api\CreateMobilePaymentRequestType',
      'CreateMobilePaymentResponseType' => 'Paypal\Api\CreateMobilePaymentResponseType',
      'GetMobileStatusReq' => 'Paypal\Api\GetMobileStatusReq',
      'GetMobileStatusRequestType' => 'Paypal\Api\GetMobileStatusRequestType',
      'GetMobileStatusResponseType' => 'Paypal\Api\GetMobileStatusResponseType',
      'SetMobileCheckoutReq' => 'Paypal\Api\SetMobileCheckoutReq',
      'SetMobileCheckoutRequestType' => 'Paypal\Api\SetMobileCheckoutRequestType',
      'SetMobileCheckoutResponseType' => 'Paypal\Api\SetMobileCheckoutResponseType',
      'DoMobileCheckoutPaymentReq' => 'Paypal\Api\DoMobileCheckoutPaymentReq',
      'DoMobileCheckoutPaymentRequestType' => 'Paypal\Api\DoMobileCheckoutPaymentRequestType',
      'DoMobileCheckoutPaymentResponseType' => 'Paypal\Api\DoMobileCheckoutPaymentResponseType',
      'GetBalanceReq' => 'Paypal\Api\GetBalanceReq',
      'GetBalanceRequestType' => 'Paypal\Api\GetBalanceRequestType',
      'GetBalanceResponseType' => 'Paypal\Api\GetBalanceResponseType',
      'SetCustomerBillingAgreementReq' => 'Paypal\Api\SetCustomerBillingAgreementReq',
      'SetCustomerBillingAgreementRequestType' => 'Paypal\Api\SetCustomerBillingAgreementRequestType',
      'SetCustomerBillingAgreementResponseType' => 'Paypal\Api\SetCustomerBillingAgreementResponseType',
      'GetBillingAgreementCustomerDetailsReq' => 'Paypal\Api\GetBillingAgreementCustomerDetailsReq',
      'GetBillingAgreementCustomerDetailsRequestType' => 'Paypal\Api\GetBillingAgreementCustomerDetailsRequestType',
      'GetBillingAgreementCustomerDetailsResponseType' => 'Paypal\Api\GetBillingAgreementCustomerDetailsResponseType',
      'CreateBillingAgreementReq' => 'Paypal\Api\CreateBillingAgreementReq',
      'CreateBillingAgreementRequestType' => 'Paypal\Api\CreateBillingAgreementRequestType',
      'CreateBillingAgreementResponseType' => 'Paypal\Api\CreateBillingAgreementResponseType',
      'DoReferenceTransactionReq' => 'Paypal\Api\DoReferenceTransactionReq',
      'DoReferenceTransactionRequestType' => 'Paypal\Api\DoReferenceTransactionRequestType',
      'DoReferenceTransactionResponseType' => 'Paypal\Api\DoReferenceTransactionResponseType',
      'DoNonReferencedCreditReq' => 'Paypal\Api\DoNonReferencedCreditReq',
      'DoNonReferencedCreditRequestType' => 'Paypal\Api\DoNonReferencedCreditRequestType',
      'DoNonReferencedCreditResponseType' => 'Paypal\Api\DoNonReferencedCreditResponseType',
      'CreateRecurringPaymentsProfileReq' => 'Paypal\Api\CreateRecurringPaymentsProfileReq',
      'CreateRecurringPaymentsProfileRequestType' => 'Paypal\Api\CreateRecurringPaymentsProfileRequestType',
      'CreateRecurringPaymentsProfileResponseType' => 'Paypal\Api\CreateRecurringPaymentsProfileResponseType',
      'GetRecurringPaymentsProfileDetailsReq' => 'Paypal\Api\GetRecurringPaymentsProfileDetailsReq',
      'GetRecurringPaymentsProfileDetailsRequestType' => 'Paypal\Api\GetRecurringPaymentsProfileDetailsRequestType',
      'GetRecurringPaymentsProfileDetailsResponseType' => 'Paypal\Api\GetRecurringPaymentsProfileDetailsResponseType',
      'ManageRecurringPaymentsProfileStatusReq' => 'Paypal\Api\ManageRecurringPaymentsProfileStatusReq',
      'ManageRecurringPaymentsProfileStatusRequestType' => 'Paypal\Api\ManageRecurringPaymentsProfileStatusRequestType',
      'ManageRecurringPaymentsProfileStatusResponseType' => 'Paypal\Api\ManageRecurringPaymentsProfileStatusResponseType',
      'BillOutstandingAmountReq' => 'Paypal\Api\BillOutstandingAmountReq',
      'BillOutstandingAmountRequestType' => 'Paypal\Api\BillOutstandingAmountRequestType',
      'BillOutstandingAmountResponseType' => 'Paypal\Api\BillOutstandingAmountResponseType',
      'UpdateRecurringPaymentsProfileReq' => 'Paypal\Api\UpdateRecurringPaymentsProfileReq',
      'UpdateRecurringPaymentsProfileRequestType' => 'Paypal\Api\UpdateRecurringPaymentsProfileRequestType',
      'UpdateRecurringPaymentsProfileResponseType' => 'Paypal\Api\UpdateRecurringPaymentsProfileResponseType',
      'GetPalDetailsReq' => 'Paypal\Api\GetPalDetailsReq',
      'GetPalDetailsRequestType' => 'Paypal\Api\GetPalDetailsRequestType',
      'GetPalDetailsResponseType' => 'Paypal\Api\GetPalDetailsResponseType',
      'ReverseTransactionReq' => 'Paypal\Api\ReverseTransactionReq',
      'ReverseTransactionRequestType' => 'Paypal\Api\ReverseTransactionRequestType',
      'ReverseTransactionResponseType' => 'Paypal\Api\ReverseTransactionResponseType',
      'ExternalRememberMeOptOutReq' => 'Paypal\Api\ExternalRememberMeOptOutReq',
      'ExternalRememberMeOptOutRequestType' => 'Paypal\Api\ExternalRememberMeOptOutRequestType',
      'ExternalRememberMeOptOutResponseType' => 'Paypal\Api\ExternalRememberMeOptOutResponseType');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'PayPalSvc.wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      
      parent::__construct($wsdl, $options);
    }

    /**
     * @param RefundTransactionReq $RefundTransactionRequest
     * @access public
     * @return RefundTransactionResponseType
     */
    public function RefundTransaction(RefundTransactionReq $RefundTransactionRequest)
    {
      return $this->__soapCall('RefundTransaction', array($RefundTransactionRequest));
    }

    /**
     * @param InitiateRecoupReq $InitiateRecoupRequest
     * @access public
     * @return InitiateRecoupResponseType
     */
    public function InitiateRecoup(InitiateRecoupReq $InitiateRecoupRequest)
    {
      return $this->__soapCall('InitiateRecoup', array($InitiateRecoupRequest));
    }

    /**
     * @param CompleteRecoupReq $CompleteRecoupRequest
     * @access public
     * @return CompleteRecoupResponseType
     */
    public function CompleteRecoup(CompleteRecoupReq $CompleteRecoupRequest)
    {
      return $this->__soapCall('CompleteRecoup', array($CompleteRecoupRequest));
    }

    /**
     * @param CancelRecoupReq $CancelRecoupRequest
     * @access public
     * @return CancelRecoupResponseType
     */
    public function CancelRecoup(CancelRecoupReq $CancelRecoupRequest)
    {
      return $this->__soapCall('CancelRecoup', array($CancelRecoupRequest));
    }

    /**
     * @param GetTransactionDetailsReq $GetTransactionDetailsRequest
     * @access public
     * @return GetTransactionDetailsResponseType
     */
    public function GetTransactionDetails(GetTransactionDetailsReq $GetTransactionDetailsRequest)
    {
      return $this->__soapCall('GetTransactionDetails', array($GetTransactionDetailsRequest));
    }

    /**
     * @param BMCreateButtonReq $BMCreateButtonRequest
     * @access public
     * @return BMCreateButtonResponseType
     */
    public function BMCreateButton(BMCreateButtonReq $BMCreateButtonRequest)
    {
      return $this->__soapCall('BMCreateButton', array($BMCreateButtonRequest));
    }

    /**
     * @param BMUpdateButtonReq $BMUpdateButtonRequest
     * @access public
     * @return BMUpdateButtonResponseType
     */
    public function BMUpdateButton(BMUpdateButtonReq $BMUpdateButtonRequest)
    {
      return $this->__soapCall('BMUpdateButton', array($BMUpdateButtonRequest));
    }

    /**
     * @param BMSetInventoryReq $BMSetInventoryRequest
     * @access public
     * @return BMSetInventoryResponseType
     */
    public function BMSetInventory(BMSetInventoryReq $BMSetInventoryRequest)
    {
      return $this->__soapCall('BMSetInventory', array($BMSetInventoryRequest));
    }

    /**
     * @param BMGetButtonDetailsReq $BMGetButtonDetailsRequest
     * @access public
     * @return BMGetButtonDetailsResponseType
     */
    public function BMGetButtonDetails(BMGetButtonDetailsReq $BMGetButtonDetailsRequest)
    {
      return $this->__soapCall('BMGetButtonDetails', array($BMGetButtonDetailsRequest));
    }

    /**
     * @param BMGetInventoryReq $BMGetInventoryRequest
     * @access public
     * @return BMGetInventoryResponseType
     */
    public function BMGetInventory(BMGetInventoryReq $BMGetInventoryRequest)
    {
      return $this->__soapCall('BMGetInventory', array($BMGetInventoryRequest));
    }

    /**
     * @param BMManageButtonStatusReq $BMManageButtonStatusRequest
     * @access public
     * @return BMManageButtonStatusResponseType
     */
    public function BMManageButtonStatus(BMManageButtonStatusReq $BMManageButtonStatusRequest)
    {
      return $this->__soapCall('BMManageButtonStatus', array($BMManageButtonStatusRequest));
    }

    /**
     * @param BMButtonSearchReq $BMButtonSearchRequest
     * @access public
     * @return BMButtonSearchResponseType
     */
    public function BMButtonSearch(BMButtonSearchReq $BMButtonSearchRequest)
    {
      return $this->__soapCall('BMButtonSearch', array($BMButtonSearchRequest));
    }

    /**
     * @param BillUserReq $BillUserRequest
     * @access public
     * @return BillUserResponseType
     */
    public function BillUser(BillUserReq $BillUserRequest)
    {
      return $this->__soapCall('BillUser', array($BillUserRequest));
    }

    /**
     * @param TransactionSearchReq $TransactionSearchRequest
     * @access public
     * @return TransactionSearchResponseType
     */
    public function TransactionSearch(TransactionSearchReq $TransactionSearchRequest)
    {
      return $this->__soapCall('TransactionSearch', array($TransactionSearchRequest));
    }

    /**
     * @param MassPayReq $MassPayRequest
     * @access public
     * @return MassPayResponseType
     */
    public function MassPay(MassPayReq $MassPayRequest)
    {
      return $this->__soapCall('MassPay', array($MassPayRequest));
    }

    /**
     * @param BillAgreementUpdateReq $BillAgreementUpdateRequest
     * @access public
     * @return BAUpdateResponseType
     */
    public function BillAgreementUpdate(BillAgreementUpdateReq $BillAgreementUpdateRequest)
    {
      return $this->__soapCall('BillAgreementUpdate', array($BillAgreementUpdateRequest));
    }

    /**
     * @param AddressVerifyReq $AddressVerifyRequest
     * @access public
     * @return AddressVerifyResponseType
     */
    public function AddressVerify(AddressVerifyReq $AddressVerifyRequest)
    {
      return $this->__soapCall('AddressVerify', array($AddressVerifyRequest));
    }

    /**
     * @param EnterBoardingReq $EnterBoardingRequest
     * @access public
     * @return EnterBoardingResponseType
     */
    public function EnterBoarding(EnterBoardingReq $EnterBoardingRequest)
    {
      return $this->__soapCall('EnterBoarding', array($EnterBoardingRequest));
    }

    /**
     * @param GetBoardingDetailsReq $GetBoardingDetailsRequest
     * @access public
     * @return GetBoardingDetailsResponseType
     */
    public function GetBoardingDetails(GetBoardingDetailsReq $GetBoardingDetailsRequest)
    {
      return $this->__soapCall('GetBoardingDetails', array($GetBoardingDetailsRequest));
    }

    /**
     * @param CreateMobilePaymentReq $CreateMobilePaymentRequest
     * @access public
     * @return CreateMobilePaymentResponseType
     */
    public function CreateMobilePayment(CreateMobilePaymentReq $CreateMobilePaymentRequest)
    {
      return $this->__soapCall('CreateMobilePayment', array($CreateMobilePaymentRequest));
    }

    /**
     * @param GetMobileStatusReq $GetMobileStatusRequest
     * @access public
     * @return GetMobileStatusResponseType
     */
    public function GetMobileStatus(GetMobileStatusReq $GetMobileStatusRequest)
    {
      return $this->__soapCall('GetMobileStatus', array($GetMobileStatusRequest));
    }

    /**
     * @param SetMobileCheckoutReq $SetMobileCheckoutRequest
     * @access public
     * @return SetMobileCheckoutResponseType
     */
    public function SetMobileCheckout(SetMobileCheckoutReq $SetMobileCheckoutRequest)
    {
      return $this->__soapCall('SetMobileCheckout', array($SetMobileCheckoutRequest));
    }

    /**
     * @param DoMobileCheckoutPaymentReq $DoMobileCheckoutPaymentRequest
     * @access public
     * @return DoMobileCheckoutPaymentResponseType
     */
    public function DoMobileCheckoutPayment(DoMobileCheckoutPaymentReq $DoMobileCheckoutPaymentRequest)
    {
      return $this->__soapCall('DoMobileCheckoutPayment', array($DoMobileCheckoutPaymentRequest));
    }

    /**
     * @param GetBalanceReq $GetBalanceRequest
     * @access public
     * @return GetBalanceResponseType
     */
    public function GetBalance(GetBalanceReq $GetBalanceRequest)
    {
      return $this->__soapCall('GetBalance', array($GetBalanceRequest));
    }

    /**
     * @param GetPalDetailsReq $GetPalDetailsRequest
     * @access public
     * @return GetPalDetailsResponseType
     */
    public function GetPalDetails(GetPalDetailsReq $GetPalDetailsRequest)
    {
      return $this->__soapCall('GetPalDetails', array($GetPalDetailsRequest));
    }

    /**
     * @param DoExpressCheckoutPaymentReq $DoExpressCheckoutPaymentRequest
     * @access public
     * @return DoExpressCheckoutPaymentResponseType
     */
    public function DoExpressCheckoutPayment(DoExpressCheckoutPaymentReq $DoExpressCheckoutPaymentRequest)
    {
      return $this->__soapCall('DoExpressCheckoutPayment', array($DoExpressCheckoutPaymentRequest));
    }

    /**
     * @param DoUATPExpressCheckoutPaymentReq $DoUATPExpressCheckoutPaymentRequest
     * @access public
     * @return DoUATPExpressCheckoutPaymentResponseType
     */
    public function DoUATPExpressCheckoutPayment(DoUATPExpressCheckoutPaymentReq $DoUATPExpressCheckoutPaymentRequest)
    {
      return $this->__soapCall('DoUATPExpressCheckoutPayment', array($DoUATPExpressCheckoutPaymentRequest));
    }

    /**
     * @param SetAuthFlowParamReq $SetAuthFlowParamRequest
     * @access public
     * @return SetAuthFlowParamResponseType
     */
    public function SetAuthFlowParam(SetAuthFlowParamReq $SetAuthFlowParamRequest)
    {
      return $this->__soapCall('SetAuthFlowParam', array($SetAuthFlowParamRequest));
    }

    /**
     * @param GetAuthDetailsReq $GetAuthDetailsRequest
     * @access public
     * @return GetAuthDetailsResponseType
     */
    public function GetAuthDetails(GetAuthDetailsReq $GetAuthDetailsRequest)
    {
      return $this->__soapCall('GetAuthDetails', array($GetAuthDetailsRequest));
    }

    /**
     * @param SetAccessPermissionsReq $SetAccessPermissionsRequest
     * @access public
     * @return SetAccessPermissionsResponseType
     */
    public function SetAccessPermissions(SetAccessPermissionsReq $SetAccessPermissionsRequest)
    {
      return $this->__soapCall('SetAccessPermissions', array($SetAccessPermissionsRequest));
    }

    /**
     * @param UpdateAccessPermissionsReq $UpdateAccessPermissionsRequest
     * @access public
     * @return UpdateAccessPermissionsResponseType
     */
    public function UpdateAccessPermissions(UpdateAccessPermissionsReq $UpdateAccessPermissionsRequest)
    {
      return $this->__soapCall('UpdateAccessPermissions', array($UpdateAccessPermissionsRequest));
    }

    /**
     * @param GetAccessPermissionDetailsReq $GetAccessPermissionDetailsRequest
     * @access public
     * @return GetAccessPermissionDetailsResponseType
     */
    public function GetAccessPermissionDetails(GetAccessPermissionDetailsReq $GetAccessPermissionDetailsRequest)
    {
      return $this->__soapCall('GetAccessPermissionDetails', array($GetAccessPermissionDetailsRequest));
    }

    /**
     * @param GetIncentiveEvaluationReq $GetIncentiveEvaluationRequest
     * @access public
     * @return GetIncentiveEvaluationResponseType
     */
    public function GetIncentiveEvaluation(GetIncentiveEvaluationReq $GetIncentiveEvaluationRequest)
    {
      return $this->__soapCall('GetIncentiveEvaluation', array($GetIncentiveEvaluationRequest));
    }

    /**
     * @param SetExpressCheckoutReq $SetExpressCheckoutRequest
     * @access public
     * @return SetExpressCheckoutResponseType
     */
    public function SetExpressCheckout(SetExpressCheckoutReq $SetExpressCheckoutRequest)
    {
      return $this->__soapCall('SetExpressCheckout', array($SetExpressCheckoutRequest));
    }

    /**
     * @param ExecuteCheckoutOperationsReq $ExecuteCheckoutOperationsRequest
     * @access public
     * @return ExecuteCheckoutOperationsResponseType
     */
    public function ExecuteCheckoutOperations(ExecuteCheckoutOperationsReq $ExecuteCheckoutOperationsRequest)
    {
      return $this->__soapCall('ExecuteCheckoutOperations', array($ExecuteCheckoutOperationsRequest));
    }

    /**
     * @param GetExpressCheckoutDetailsReq $GetExpressCheckoutDetailsRequest
     * @access public
     * @return GetExpressCheckoutDetailsResponseType
     */
    public function GetExpressCheckoutDetails(GetExpressCheckoutDetailsReq $GetExpressCheckoutDetailsRequest)
    {
      return $this->__soapCall('GetExpressCheckoutDetails', array($GetExpressCheckoutDetailsRequest));
    }

    /**
     * @param DoDirectPaymentReq $DoDirectPaymentRequest
     * @access public
     * @return DoDirectPaymentResponseType
     */
    public function DoDirectPayment(DoDirectPaymentReq $DoDirectPaymentRequest)
    {
      return $this->__soapCall('DoDirectPayment', array($DoDirectPaymentRequest));
    }

    /**
     * @param ManagePendingTransactionStatusReq $ManagePendingTransactionStatusRequest
     * @access public
     * @return ManagePendingTransactionStatusResponseType
     */
    public function ManagePendingTransactionStatus(ManagePendingTransactionStatusReq $ManagePendingTransactionStatusRequest)
    {
      return $this->__soapCall('ManagePendingTransactionStatus', array($ManagePendingTransactionStatusRequest));
    }

    /**
     * @param DoCancelReq $DoCancelRequest
     * @access public
     * @return DoCancelResponseType
     */
    public function DoCancel(DoCancelReq $DoCancelRequest)
    {
      return $this->__soapCall('DoCancel', array($DoCancelRequest));
    }

    /**
     * @param DoCaptureReq $DoCaptureRequest
     * @access public
     * @return DoCaptureResponseType
     */
    public function DoCapture(DoCaptureReq $DoCaptureRequest)
    {
      return $this->__soapCall('DoCapture', array($DoCaptureRequest));
    }

    /**
     * @param DoReauthorizationReq $DoReauthorizationRequest
     * @access public
     * @return DoReauthorizationResponseType
     */
    public function DoReauthorization(DoReauthorizationReq $DoReauthorizationRequest)
    {
      return $this->__soapCall('DoReauthorization', array($DoReauthorizationRequest));
    }

    /**
     * @param DoVoidReq $DoVoidRequest
     * @access public
     * @return DoVoidResponseType
     */
    public function DoVoid(DoVoidReq $DoVoidRequest)
    {
      return $this->__soapCall('DoVoid', array($DoVoidRequest));
    }

    /**
     * @param DoAuthorizationReq $DoAuthorizationRequest
     * @access public
     * @return DoAuthorizationResponseType
     */
    public function DoAuthorization(DoAuthorizationReq $DoAuthorizationRequest)
    {
      return $this->__soapCall('DoAuthorization', array($DoAuthorizationRequest));
    }

    /**
     * @param UpdateAuthorizationReq $UpdateAuthorizationRequest
     * @access public
     * @return UpdateAuthorizationResponseType
     */
    public function UpdateAuthorization(UpdateAuthorizationReq $UpdateAuthorizationRequest)
    {
      return $this->__soapCall('UpdateAuthorization', array($UpdateAuthorizationRequest));
    }

    /**
     * @param DoUATPAuthorizationReq $DoUATPAuthorizationRequest
     * @access public
     * @return DoUATPAuthorizationResponseType
     */
    public function DoUATPAuthorization(DoUATPAuthorizationReq $DoUATPAuthorizationRequest)
    {
      return $this->__soapCall('DoUATPAuthorization', array($DoUATPAuthorizationRequest));
    }

    /**
     * @param SetCustomerBillingAgreementReq $SetCustomerBillingAgreementRequest
     * @access public
     * @return SetCustomerBillingAgreementResponseType
     */
    public function SetCustomerBillingAgreement(SetCustomerBillingAgreementReq $SetCustomerBillingAgreementRequest)
    {
      return $this->__soapCall('SetCustomerBillingAgreement', array($SetCustomerBillingAgreementRequest));
    }

    /**
     * @param GetBillingAgreementCustomerDetailsReq $GetBillingAgreementCustomerDetailsRequest
     * @access public
     * @return GetBillingAgreementCustomerDetailsResponseType
     */
    public function GetBillingAgreementCustomerDetails(GetBillingAgreementCustomerDetailsReq $GetBillingAgreementCustomerDetailsRequest)
    {
      return $this->__soapCall('GetBillingAgreementCustomerDetails', array($GetBillingAgreementCustomerDetailsRequest));
    }

    /**
     * @param CreateBillingAgreementReq $CreateBillingAgreementRequest
     * @access public
     * @return CreateBillingAgreementResponseType
     */
    public function CreateBillingAgreement(CreateBillingAgreementReq $CreateBillingAgreementRequest)
    {
      return $this->__soapCall('CreateBillingAgreement', array($CreateBillingAgreementRequest));
    }

    /**
     * @param DoReferenceTransactionReq $DoReferenceTransactionRequest
     * @access public
     * @return DoReferenceTransactionResponseType
     */
    public function DoReferenceTransaction(DoReferenceTransactionReq $DoReferenceTransactionRequest)
    {
      return $this->__soapCall('DoReferenceTransaction', array($DoReferenceTransactionRequest));
    }

    /**
     * @param CreateRecurringPaymentsProfileReq $CreateRecurringPaymentsProfileRequest
     * @access public
     * @return CreateRecurringPaymentsProfileResponseType
     */
    public function CreateRecurringPaymentsProfile(CreateRecurringPaymentsProfileReq $CreateRecurringPaymentsProfileRequest)
    {
      return $this->__soapCall('CreateRecurringPaymentsProfile', array($CreateRecurringPaymentsProfileRequest));
    }

    /**
     * @param GetRecurringPaymentsProfileDetailsReq $GetRecurringPaymentsProfileDetailsRequest
     * @access public
     * @return GetRecurringPaymentsProfileDetailsResponseType
     */
    public function GetRecurringPaymentsProfileDetails(GetRecurringPaymentsProfileDetailsReq $GetRecurringPaymentsProfileDetailsRequest)
    {
      return $this->__soapCall('GetRecurringPaymentsProfileDetails', array($GetRecurringPaymentsProfileDetailsRequest));
    }

    /**
     * @param ManageRecurringPaymentsProfileStatusReq $ManageRecurringPaymentsProfileStatusRequest
     * @access public
     * @return ManageRecurringPaymentsProfileStatusResponseType
     */
    public function ManageRecurringPaymentsProfileStatus(ManageRecurringPaymentsProfileStatusReq $ManageRecurringPaymentsProfileStatusRequest)
    {
      return $this->__soapCall('ManageRecurringPaymentsProfileStatus', array($ManageRecurringPaymentsProfileStatusRequest));
    }

    /**
     * @param BillOutstandingAmountReq $BillOutstandingAmountRequest
     * @access public
     * @return BillOutstandingAmountResponseType
     */
    public function BillOutstandingAmount(BillOutstandingAmountReq $BillOutstandingAmountRequest)
    {
      return $this->__soapCall('BillOutstandingAmount', array($BillOutstandingAmountRequest));
    }

    /**
     * @param UpdateRecurringPaymentsProfileReq $UpdateRecurringPaymentsProfileRequest
     * @access public
     * @return UpdateRecurringPaymentsProfileResponseType
     */
    public function UpdateRecurringPaymentsProfile(UpdateRecurringPaymentsProfileReq $UpdateRecurringPaymentsProfileRequest)
    {
      return $this->__soapCall('UpdateRecurringPaymentsProfile', array($UpdateRecurringPaymentsProfileRequest));
    }

    /**
     * @param DoNonReferencedCreditReq $DoNonReferencedCreditRequest
     * @access public
     * @return DoNonReferencedCreditResponseType
     */
    public function DoNonReferencedCredit(DoNonReferencedCreditReq $DoNonReferencedCreditRequest)
    {
      return $this->__soapCall('DoNonReferencedCredit', array($DoNonReferencedCreditRequest));
    }

    /**
     * @param ReverseTransactionReq $ReverseTransactionRequest
     * @access public
     * @return ReverseTransactionResponseType
     */
    public function ReverseTransaction(ReverseTransactionReq $ReverseTransactionRequest)
    {
      return $this->__soapCall('ReverseTransaction', array($ReverseTransactionRequest));
    }

    /**
     * @param ExternalRememberMeOptOutReq $ExternalRememberMeOptOutRequest
     * @access public
     * @return ExternalRememberMeOptOutResponseType
     */
    public function ExternalRememberMeOptOut(ExternalRememberMeOptOutReq $ExternalRememberMeOptOutRequest)
    {
      return $this->__soapCall('ExternalRememberMeOptOut', array($ExternalRememberMeOptOutRequest));
    }

}
