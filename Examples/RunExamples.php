<?php
// Required dependencies and include autoload.php
require_once(__DIR__ . '\vendor\autoload.php');

include(__DIR__ . '\Utils.php');
include(__DIR__ . '\BasicUsage\GetSupportedFormats.php');
include(__DIR__ . '\BasicUsage\GetDocumentInformation.php');
include(__DIR__ . '\BasicUsage\GetAttachments.php');
include(__DIR__ . '\BasicUsage\HtmlViewer\HtmlViewerExcludeFonts.php');
include(__DIR__ . '\BasicUsage\HtmlViewer\HtmlViewerMinifyHtml.php');
include(__DIR__ . '\BasicUsage\HtmlViewer\HtmlViewerResponsiveLayout.php');
include(__DIR__ . '\BasicUsage\ImageViewer\ImageViewerAddTextOverlay.php');
include(__DIR__ . '\BasicUsage\ImageViewer\ImageViewerAdjustImageSize.php');
include(__DIR__ . '\BasicUsage\ImageViewer\ImageViewerAdjustJpgQuality.php');
include(__DIR__ . '\BasicUsage\ImageViewer\ImageViewerGetTextCoordinates.php');
include(__DIR__ . '\BasicUsage\PdfViewer\PdfViewerAdjustJpgQuality.php');
include(__DIR__ . '\BasicUsage\PdfViewer\PdfViewerProtectPdf.php');
include(__DIR__ . '\AdvancedUsage\CommonRenderingOptions\AddWatermark.php');
include(__DIR__ . '\AdvancedUsage\CommonRenderingOptions\FlipRotatePages.php');
include(__DIR__ . '\AdvancedUsage\CommonRenderingOptions\RenderComments.php');
include(__DIR__ . '\AdvancedUsage\CommonRenderingOptions\RenderConsecutivePages.php');
include(__DIR__ . '\AdvancedUsage\CommonRenderingOptions\RenderHiddenPages.php');
include(__DIR__ . '\AdvancedUsage\CommonRenderingOptions\RenderNotes.php');
include(__DIR__ . '\AdvancedUsage\CommonRenderingOptions\RenderSelectedPages.php');
include(__DIR__ . '\AdvancedUsage\CommonRenderingOptions\RenderWithCustomFonts.php');
include(__DIR__ . '\AdvancedUsage\CommonRenderingOptions\ReorderPages.php');
include(__DIR__ . '\AdvancedUsage\CommonRenderingOptions\ReplaceMissingFont.php');
include(__DIR__ . '\AdvancedUsage\LoadingOptions\SpecifyEncoding.php');
include(__DIR__ . '\AdvancedUsage\LoadingOptions\ViewProtectedDocument.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingArchiveFiles\GetInfoForArchiveFile.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingArchiveFiles\RenderArchiveFolder.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingCadDrawings\AdjustOutputImageSize.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingCadDrawings\GetInfoForCadDrawing.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingCadDrawings\RenderAllLayouts.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingCadDrawings\RenderLayers.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingCadDrawings\RenderSingleLayout.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingEmailMessages\AdjustPageSize.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingEmailMessages\RenameEmailFields.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingMsProjectDocuments\AdjustTimeUnit.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingMsProjectDocuments\GetInfoForProjectFile.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingMsProjectDocuments\RenderTimeInterval.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingOutlookDataFiles\FilterMessages.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingOutlookDataFiles\GetInfoForOutlookDataFile.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingOutlookDataFiles\LimitCountOfItemsToRender.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingOutlookDataFiles\RenderFolder.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingPdfDocuments\AdjustImageQuality.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingPdfDocuments\DisableCharsGrouping.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingPdfDocuments\EnableFontHinting.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingPdfDocuments\EnableLayeredRendering.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingPdfDocuments\GetInfoForPdfFile.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingPdfDocuments\RenderOriginalPageSize.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingSpreadsheets\AdjustTextOverflowInCells.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingSpreadsheets\RenderHiddenColumnsAndRows.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingSpreadsheets\RenderPrintAreas.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingSpreadsheets\RenderSpreadsheetWithGridLines.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingSpreadsheets\SkipRenderingOfEmptyColumns.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingSpreadsheets\SkipRenderingOfEmptyRows.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingSpreadsheets\SplitWorksheetsIntoPages.php');
include(__DIR__ . '\AdvancedUsage\RenderingOptionsByFileType\RenderingWordProcessingDocuments\RenderTrackedChanges.php');


// Uploading sample files into storage
Utils::UploadResources();

// Basic usage Examples

GetSupportedFormats::Run();
GetDocumentInformation::Run();
GetAttachments::Run();
HtmlViewerExcludeFonts::Run();
HtmlViewerMinifyHtml::Run();
HtmlViewerResponsiveLayout::Run();
ImageViewerAddTextOverlay::Run();
ImageViewerAdjustImageSize::Run();
ImageViewerAdjustJpgQuality::Run();
ImageViewerGetTextCoordinates::Run();
PdfViewerAdjustJpgQuality::Run();
PdfViewerProtectPdf::Run();

// Advanced usage Examples

AddWatermark::Run();
FlipRotatePages::Run();
RenderComments::Run();
RenderConsecutivePages::Run();
RenderHiddenPages::Run();
RenderNotes::Run();
RenderSelectedPages::Run();
RenderWithCustomFonts::Run();
ReorderPages::Run();
ReplaceMissingFont::Run();
SpecifyEncoding::Run();
ViewProtectedDocument::Run();
GetInfoForArchiveFile::Run();
RenderArchiveFolder::Run();
AdjustOutputImageSize::Run();
GetInfoForCadDrawing::Run();
RenderAllLayouts::Run();
RenderLayers::Run();
RenderSingleLayout::Run();
AdjustPageSize::Run();
RenameEmailFields::Run();
AdjustTimeUnit::Run();
GetInfoForProjectFile::Run();
RenderTimeInterval::Run();
FilterMessages::Run();
GetInfoForOutlookDataFile::Run();
LimitCountOfItemsToRender::Run();
RenderFolder::Run();
AdjustImageQuality::Run();
DisableCharsGrouping::Run();
EnableFontHinting::Run();
EnableLayeredRendering::Run();
GetInfoForPdfFile::Run();
RenderOriginalPageSize::Run();
AdjustTextOverflowInCells::Run();
RenderHiddenColumnsAndRows::Run();
RenderPrintAreas::Run();
RenderSpreadsheetWithGridLines::Run();
SkipRenderingOfEmptyColumns::Run();
SkipRenderingOfEmptyRows::Run();
SplitWorksheetsIntoPages::Run();
RenderTrackedChanges::Run();