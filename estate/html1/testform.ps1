Add-Type -AssemblyName System.Windows.Forms
. (Join-Path $PSScriptRoot 'testform.designer.ps1')
$Form1.ShowDialog()