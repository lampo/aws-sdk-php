<?php
namespace RamseyAws\ServiceCatalog;

use RamseyAws\AwsClient;

/**
 * This client is used to interact with the **AWS Service Catalog** service.
 * @method \RamseyAws\Result acceptPortfolioShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptPortfolioShareAsync(array $args = [])
 * @method \RamseyAws\Result associatePrincipalWithPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associatePrincipalWithPortfolioAsync(array $args = [])
 * @method \RamseyAws\Result associateProductWithPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateProductWithPortfolioAsync(array $args = [])
 * @method \RamseyAws\Result associateTagOptionWithResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateTagOptionWithResourceAsync(array $args = [])
 * @method \RamseyAws\Result createConstraint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createConstraintAsync(array $args = [])
 * @method \RamseyAws\Result createPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPortfolioAsync(array $args = [])
 * @method \RamseyAws\Result createPortfolioShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPortfolioShareAsync(array $args = [])
 * @method \RamseyAws\Result createProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProductAsync(array $args = [])
 * @method \RamseyAws\Result createProvisioningArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createProvisioningArtifactAsync(array $args = [])
 * @method \RamseyAws\Result createTagOption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTagOptionAsync(array $args = [])
 * @method \RamseyAws\Result deleteConstraint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteConstraintAsync(array $args = [])
 * @method \RamseyAws\Result deletePortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePortfolioAsync(array $args = [])
 * @method \RamseyAws\Result deletePortfolioShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePortfolioShareAsync(array $args = [])
 * @method \RamseyAws\Result deleteProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProductAsync(array $args = [])
 * @method \RamseyAws\Result deleteProvisioningArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteProvisioningArtifactAsync(array $args = [])
 * @method \RamseyAws\Result describeConstraint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConstraintAsync(array $args = [])
 * @method \RamseyAws\Result describePortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePortfolioAsync(array $args = [])
 * @method \RamseyAws\Result describeProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProductAsync(array $args = [])
 * @method \RamseyAws\Result describeProductAsAdmin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProductAsAdminAsync(array $args = [])
 * @method \RamseyAws\Result describeProductView(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProductViewAsync(array $args = [])
 * @method \RamseyAws\Result describeProvisionedProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProvisionedProductAsync(array $args = [])
 * @method \RamseyAws\Result describeProvisioningArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProvisioningArtifactAsync(array $args = [])
 * @method \RamseyAws\Result describeProvisioningParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeProvisioningParametersAsync(array $args = [])
 * @method \RamseyAws\Result describeRecord(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRecordAsync(array $args = [])
 * @method \RamseyAws\Result describeTagOption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagOptionAsync(array $args = [])
 * @method \RamseyAws\Result disassociatePrincipalFromPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociatePrincipalFromPortfolioAsync(array $args = [])
 * @method \RamseyAws\Result disassociateProductFromPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateProductFromPortfolioAsync(array $args = [])
 * @method \RamseyAws\Result disassociateTagOptionFromResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateTagOptionFromResourceAsync(array $args = [])
 * @method \RamseyAws\Result listAcceptedPortfolioShares(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAcceptedPortfolioSharesAsync(array $args = [])
 * @method \RamseyAws\Result listConstraintsForPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listConstraintsForPortfolioAsync(array $args = [])
 * @method \RamseyAws\Result listLaunchPaths(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLaunchPathsAsync(array $args = [])
 * @method \RamseyAws\Result listPortfolioAccess(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPortfolioAccessAsync(array $args = [])
 * @method \RamseyAws\Result listPortfolios(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPortfoliosAsync(array $args = [])
 * @method \RamseyAws\Result listPortfoliosForProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPortfoliosForProductAsync(array $args = [])
 * @method \RamseyAws\Result listPrincipalsForPortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPrincipalsForPortfolioAsync(array $args = [])
 * @method \RamseyAws\Result listProvisioningArtifacts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listProvisioningArtifactsAsync(array $args = [])
 * @method \RamseyAws\Result listRecordHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRecordHistoryAsync(array $args = [])
 * @method \RamseyAws\Result listResourcesForTagOption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourcesForTagOptionAsync(array $args = [])
 * @method \RamseyAws\Result listTagOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagOptionsAsync(array $args = [])
 * @method \RamseyAws\Result provisionProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise provisionProductAsync(array $args = [])
 * @method \RamseyAws\Result rejectPortfolioShare(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rejectPortfolioShareAsync(array $args = [])
 * @method \RamseyAws\Result scanProvisionedProducts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise scanProvisionedProductsAsync(array $args = [])
 * @method \RamseyAws\Result searchProducts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchProductsAsync(array $args = [])
 * @method \RamseyAws\Result searchProductsAsAdmin(array $args = [])
 * @method \GuzzleHttp\Promise\Promise searchProductsAsAdminAsync(array $args = [])
 * @method \RamseyAws\Result terminateProvisionedProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateProvisionedProductAsync(array $args = [])
 * @method \RamseyAws\Result updateConstraint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateConstraintAsync(array $args = [])
 * @method \RamseyAws\Result updatePortfolio(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updatePortfolioAsync(array $args = [])
 * @method \RamseyAws\Result updateProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProductAsync(array $args = [])
 * @method \RamseyAws\Result updateProvisionedProduct(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProvisionedProductAsync(array $args = [])
 * @method \RamseyAws\Result updateProvisioningArtifact(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateProvisioningArtifactAsync(array $args = [])
 * @method \RamseyAws\Result updateTagOption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTagOptionAsync(array $args = [])
 */
class ServiceCatalogClient extends AwsClient {}
