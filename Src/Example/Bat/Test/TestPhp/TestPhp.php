<?
  $Exec=$this->Create_Object('/System/Exec');
  $Exec->Env=$_SERVER;
  
  $Compiler=$this->RequireAsset('Cpp/Compiler')->Instance;
  $Exec->Env['VcVars']=$Compiler->VCVars;
  
  $Exec->Command=$this->FindFile('TestBat.bat')[1];
  $Exec->Execute();
  $Exec->Done();
?>