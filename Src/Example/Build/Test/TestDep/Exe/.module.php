<?
  return [  
    'Assets'=>[
      ['Module/Depends',
        'TestDep/Lib1',
      //'TestDep/Lib2', // Fix bug of VC
        'TestDep/Lib3',
      ],
      ['Cpp/SrcPath' ,''],
      ['Cpp/Src'     ,'TestDepExe.cpp'],
      ['Public'],
      ['Cpp/Define', 'TEST_LIB'],
      ['Cpp/MakeExe'],
    ],
  ];
?>