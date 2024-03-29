<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'App\\Controllers\\HomeController' => $baseDir . '/App/Controllers/HomeController.php',
    'App\\Controllers\\ProductsController' => $baseDir . '/App/Controllers/ProductsController.php',
    'App\\Core\\App' => $baseDir . '/App/Core/App.php',
    'App\\Core\\DB' => $baseDir . '/App/Core/DB.php',
    'App\\Core\\View' => $baseDir . '/App/Core/View.php',
    'App\\Exceptions\\RouteNotFoundException' => $baseDir . '/App/Exceptions/RouteNotFoundException.php',
    'App\\Exceptions\\ViewNotFoundException' => $baseDir . '/App/Exceptions/ViewNotFoundException.php',
    'App\\Models\\Product' => $baseDir . '/App/Models/Product.php',
    'Attribute' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Dotenv\\Dotenv' => $vendorDir . '/vlucas/phpdotenv/src/Dotenv.php',
    'Dotenv\\Exception\\ExceptionInterface' => $vendorDir . '/vlucas/phpdotenv/src/Exception/ExceptionInterface.php',
    'Dotenv\\Exception\\InvalidEncodingException' => $vendorDir . '/vlucas/phpdotenv/src/Exception/InvalidEncodingException.php',
    'Dotenv\\Exception\\InvalidFileException' => $vendorDir . '/vlucas/phpdotenv/src/Exception/InvalidFileException.php',
    'Dotenv\\Exception\\InvalidPathException' => $vendorDir . '/vlucas/phpdotenv/src/Exception/InvalidPathException.php',
    'Dotenv\\Exception\\ValidationException' => $vendorDir . '/vlucas/phpdotenv/src/Exception/ValidationException.php',
    'Dotenv\\Loader\\Loader' => $vendorDir . '/vlucas/phpdotenv/src/Loader/Loader.php',
    'Dotenv\\Loader\\LoaderInterface' => $vendorDir . '/vlucas/phpdotenv/src/Loader/LoaderInterface.php',
    'Dotenv\\Loader\\Resolver' => $vendorDir . '/vlucas/phpdotenv/src/Loader/Resolver.php',
    'Dotenv\\Parser\\Entry' => $vendorDir . '/vlucas/phpdotenv/src/Parser/Entry.php',
    'Dotenv\\Parser\\EntryParser' => $vendorDir . '/vlucas/phpdotenv/src/Parser/EntryParser.php',
    'Dotenv\\Parser\\Lexer' => $vendorDir . '/vlucas/phpdotenv/src/Parser/Lexer.php',
    'Dotenv\\Parser\\Lines' => $vendorDir . '/vlucas/phpdotenv/src/Parser/Lines.php',
    'Dotenv\\Parser\\Parser' => $vendorDir . '/vlucas/phpdotenv/src/Parser/Parser.php',
    'Dotenv\\Parser\\ParserInterface' => $vendorDir . '/vlucas/phpdotenv/src/Parser/ParserInterface.php',
    'Dotenv\\Parser\\Value' => $vendorDir . '/vlucas/phpdotenv/src/Parser/Value.php',
    'Dotenv\\Repository\\AdapterRepository' => $vendorDir . '/vlucas/phpdotenv/src/Repository/AdapterRepository.php',
    'Dotenv\\Repository\\Adapter\\AdapterInterface' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/AdapterInterface.php',
    'Dotenv\\Repository\\Adapter\\ApacheAdapter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/ApacheAdapter.php',
    'Dotenv\\Repository\\Adapter\\ArrayAdapter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/ArrayAdapter.php',
    'Dotenv\\Repository\\Adapter\\EnvConstAdapter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/EnvConstAdapter.php',
    'Dotenv\\Repository\\Adapter\\GuardedWriter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/GuardedWriter.php',
    'Dotenv\\Repository\\Adapter\\ImmutableWriter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/ImmutableWriter.php',
    'Dotenv\\Repository\\Adapter\\MultiReader' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/MultiReader.php',
    'Dotenv\\Repository\\Adapter\\MultiWriter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/MultiWriter.php',
    'Dotenv\\Repository\\Adapter\\PutenvAdapter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/PutenvAdapter.php',
    'Dotenv\\Repository\\Adapter\\ReaderInterface' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/ReaderInterface.php',
    'Dotenv\\Repository\\Adapter\\ReplacingWriter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/ReplacingWriter.php',
    'Dotenv\\Repository\\Adapter\\ServerConstAdapter' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/ServerConstAdapter.php',
    'Dotenv\\Repository\\Adapter\\WriterInterface' => $vendorDir . '/vlucas/phpdotenv/src/Repository/Adapter/WriterInterface.php',
    'Dotenv\\Repository\\RepositoryBuilder' => $vendorDir . '/vlucas/phpdotenv/src/Repository/RepositoryBuilder.php',
    'Dotenv\\Repository\\RepositoryInterface' => $vendorDir . '/vlucas/phpdotenv/src/Repository/RepositoryInterface.php',
    'Dotenv\\Store\\FileStore' => $vendorDir . '/vlucas/phpdotenv/src/Store/FileStore.php',
    'Dotenv\\Store\\File\\Paths' => $vendorDir . '/vlucas/phpdotenv/src/Store/File/Paths.php',
    'Dotenv\\Store\\File\\Reader' => $vendorDir . '/vlucas/phpdotenv/src/Store/File/Reader.php',
    'Dotenv\\Store\\StoreBuilder' => $vendorDir . '/vlucas/phpdotenv/src/Store/StoreBuilder.php',
    'Dotenv\\Store\\StoreInterface' => $vendorDir . '/vlucas/phpdotenv/src/Store/StoreInterface.php',
    'Dotenv\\Store\\StringStore' => $vendorDir . '/vlucas/phpdotenv/src/Store/StringStore.php',
    'Dotenv\\Util\\Regex' => $vendorDir . '/vlucas/phpdotenv/src/Util/Regex.php',
    'Dotenv\\Util\\Str' => $vendorDir . '/vlucas/phpdotenv/src/Util/Str.php',
    'Dotenv\\Validator' => $vendorDir . '/vlucas/phpdotenv/src/Validator.php',
    'GrahamCampbell\\ResultType\\Error' => $vendorDir . '/graham-campbell/result-type/src/Error.php',
    'GrahamCampbell\\ResultType\\Result' => $vendorDir . '/graham-campbell/result-type/src/Result.php',
    'GrahamCampbell\\ResultType\\Success' => $vendorDir . '/graham-campbell/result-type/src/Success.php',
    'PhpOption\\LazyOption' => $vendorDir . '/phpoption/phpoption/src/PhpOption/LazyOption.php',
    'PhpOption\\None' => $vendorDir . '/phpoption/phpoption/src/PhpOption/None.php',
    'PhpOption\\Option' => $vendorDir . '/phpoption/phpoption/src/PhpOption/Option.php',
    'PhpOption\\Some' => $vendorDir . '/phpoption/phpoption/src/PhpOption/Some.php',
    'PhpToken' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
    'Smarty' => $vendorDir . '/smarty/smarty/libs/Smarty.class.php',
    'SmartyCompilerException' => $vendorDir . '/smarty/smarty/libs/sysplugins/smartycompilerexception.php',
    'SmartyException' => $vendorDir . '/smarty/smarty/libs/sysplugins/smartyexception.php',
    'Smarty_Autoloader' => $vendorDir . '/smarty/smarty/libs/Autoloader.php',
    'Smarty_CacheResource' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_cacheresource.php',
    'Smarty_CacheResource_Custom' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_cacheresource_custom.php',
    'Smarty_CacheResource_KeyValueStore' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_cacheresource_keyvaluestore.php',
    'Smarty_Data' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_data.php',
    'Smarty_Internal_Block' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_block.php',
    'Smarty_Internal_CacheResource_File' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_cacheresource_file.php',
    'Smarty_Internal_CompileBase' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compilebase.php',
    'Smarty_Internal_Compile_Append' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_append.php',
    'Smarty_Internal_Compile_Assign' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_assign.php',
    'Smarty_Internal_Compile_Block' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_block.php',
    'Smarty_Internal_Compile_Block_Child' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_block_child.php',
    'Smarty_Internal_Compile_Block_Parent' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_block_parent.php',
    'Smarty_Internal_Compile_Blockclose' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_block.php',
    'Smarty_Internal_Compile_Break' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_break.php',
    'Smarty_Internal_Compile_Call' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_call.php',
    'Smarty_Internal_Compile_Capture' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_capture.php',
    'Smarty_Internal_Compile_CaptureClose' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_capture.php',
    'Smarty_Internal_Compile_Child' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_child.php',
    'Smarty_Internal_Compile_Config_Load' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_config_load.php',
    'Smarty_Internal_Compile_Continue' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_continue.php',
    'Smarty_Internal_Compile_Debug' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_debug.php',
    'Smarty_Internal_Compile_Else' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_if.php',
    'Smarty_Internal_Compile_Elseif' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_if.php',
    'Smarty_Internal_Compile_Eval' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_eval.php',
    'Smarty_Internal_Compile_Extends' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_extends.php',
    'Smarty_Internal_Compile_For' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_for.php',
    'Smarty_Internal_Compile_Forclose' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_for.php',
    'Smarty_Internal_Compile_Foreach' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_foreach.php',
    'Smarty_Internal_Compile_Foreachclose' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_foreach.php',
    'Smarty_Internal_Compile_Foreachelse' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_foreach.php',
    'Smarty_Internal_Compile_Forelse' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_for.php',
    'Smarty_Internal_Compile_Function' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_function.php',
    'Smarty_Internal_Compile_Functionclose' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_function.php',
    'Smarty_Internal_Compile_If' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_if.php',
    'Smarty_Internal_Compile_Ifclose' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_if.php',
    'Smarty_Internal_Compile_Include' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_include.php',
    'Smarty_Internal_Compile_Insert' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_insert.php',
    'Smarty_Internal_Compile_Ldelim' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_ldelim.php',
    'Smarty_Internal_Compile_Make_Nocache' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_make_nocache.php',
    'Smarty_Internal_Compile_Nocache' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_nocache.php',
    'Smarty_Internal_Compile_Nocacheclose' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_nocache.php',
    'Smarty_Internal_Compile_Parent' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_parent.php',
    'Smarty_Internal_Compile_Private_Block_Plugin' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_block_plugin.php',
    'Smarty_Internal_Compile_Private_ForeachSection' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_foreachsection.php',
    'Smarty_Internal_Compile_Private_Function_Plugin' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_function_plugin.php',
    'Smarty_Internal_Compile_Private_Modifier' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_modifier.php',
    'Smarty_Internal_Compile_Private_Object_Block_Function' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_object_block_function.php',
    'Smarty_Internal_Compile_Private_Object_Function' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_object_function.php',
    'Smarty_Internal_Compile_Private_Print_Expression' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_print_expression.php',
    'Smarty_Internal_Compile_Private_Registered_Block' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_registered_block.php',
    'Smarty_Internal_Compile_Private_Registered_Function' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_registered_function.php',
    'Smarty_Internal_Compile_Private_Special_Variable' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_private_special_variable.php',
    'Smarty_Internal_Compile_Rdelim' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_rdelim.php',
    'Smarty_Internal_Compile_Section' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_section.php',
    'Smarty_Internal_Compile_Sectionclose' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_section.php',
    'Smarty_Internal_Compile_Sectionelse' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_section.php',
    'Smarty_Internal_Compile_Setfilter' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_setfilter.php',
    'Smarty_Internal_Compile_Setfilterclose' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_setfilter.php',
    'Smarty_Internal_Compile_Shared_Inheritance' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_shared_inheritance.php',
    'Smarty_Internal_Compile_While' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_while.php',
    'Smarty_Internal_Compile_Whileclose' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_compile_while.php',
    'Smarty_Internal_Config_File_Compiler' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_config_file_compiler.php',
    'Smarty_Internal_Configfilelexer' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_configfilelexer.php',
    'Smarty_Internal_Configfileparser' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_configfileparser.php',
    'Smarty_Internal_Data' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_data.php',
    'Smarty_Internal_Debug' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_debug.php',
    'Smarty_Internal_ErrorHandler' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_errorhandler.php',
    'Smarty_Internal_Extension_Handler' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_extension_handler.php',
    'Smarty_Internal_Method_AddAutoloadFilters' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_addautoloadfilters.php',
    'Smarty_Internal_Method_AddDefaultModifiers' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_adddefaultmodifiers.php',
    'Smarty_Internal_Method_Append' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_append.php',
    'Smarty_Internal_Method_AppendByRef' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_appendbyref.php',
    'Smarty_Internal_Method_AssignByRef' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_assignbyref.php',
    'Smarty_Internal_Method_AssignGlobal' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_assignglobal.php',
    'Smarty_Internal_Method_ClearAllAssign' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_clearallassign.php',
    'Smarty_Internal_Method_ClearAllCache' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_clearallcache.php',
    'Smarty_Internal_Method_ClearAssign' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_clearassign.php',
    'Smarty_Internal_Method_ClearCache' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_clearcache.php',
    'Smarty_Internal_Method_ClearCompiledTemplate' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_clearcompiledtemplate.php',
    'Smarty_Internal_Method_ClearConfig' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_clearconfig.php',
    'Smarty_Internal_Method_CompileAllConfig' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_compileallconfig.php',
    'Smarty_Internal_Method_CompileAllTemplates' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_compilealltemplates.php',
    'Smarty_Internal_Method_ConfigLoad' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_configload.php',
    'Smarty_Internal_Method_CreateData' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_createdata.php',
    'Smarty_Internal_Method_GetAutoloadFilters' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getautoloadfilters.php',
    'Smarty_Internal_Method_GetConfigVariable' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getconfigvariable.php',
    'Smarty_Internal_Method_GetConfigVars' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getconfigvars.php',
    'Smarty_Internal_Method_GetDebugTemplate' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getdebugtemplate.php',
    'Smarty_Internal_Method_GetDefaultModifiers' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getdefaultmodifiers.php',
    'Smarty_Internal_Method_GetGlobal' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getglobal.php',
    'Smarty_Internal_Method_GetRegisteredObject' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getregisteredobject.php',
    'Smarty_Internal_Method_GetStreamVariable' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_getstreamvariable.php',
    'Smarty_Internal_Method_GetTags' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_gettags.php',
    'Smarty_Internal_Method_GetTemplateVars' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_gettemplatevars.php',
    'Smarty_Internal_Method_Literals' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_literals.php',
    'Smarty_Internal_Method_LoadFilter' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_loadfilter.php',
    'Smarty_Internal_Method_LoadPlugin' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_loadplugin.php',
    'Smarty_Internal_Method_MustCompile' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_mustcompile.php',
    'Smarty_Internal_Method_RegisterCacheResource' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registercacheresource.php',
    'Smarty_Internal_Method_RegisterClass' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerclass.php',
    'Smarty_Internal_Method_RegisterDefaultConfigHandler' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerdefaultconfighandler.php',
    'Smarty_Internal_Method_RegisterDefaultPluginHandler' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerdefaultpluginhandler.php',
    'Smarty_Internal_Method_RegisterDefaultTemplateHandler' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerdefaulttemplatehandler.php',
    'Smarty_Internal_Method_RegisterFilter' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerfilter.php',
    'Smarty_Internal_Method_RegisterObject' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerobject.php',
    'Smarty_Internal_Method_RegisterPlugin' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerplugin.php',
    'Smarty_Internal_Method_RegisterResource' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_registerresource.php',
    'Smarty_Internal_Method_SetAutoloadFilters' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_setautoloadfilters.php',
    'Smarty_Internal_Method_SetDebugTemplate' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_setdebugtemplate.php',
    'Smarty_Internal_Method_SetDefaultModifiers' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_setdefaultmodifiers.php',
    'Smarty_Internal_Method_UnloadFilter' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_unloadfilter.php',
    'Smarty_Internal_Method_UnregisterCacheResource' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_unregistercacheresource.php',
    'Smarty_Internal_Method_UnregisterFilter' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_unregisterfilter.php',
    'Smarty_Internal_Method_UnregisterObject' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_unregisterobject.php',
    'Smarty_Internal_Method_UnregisterPlugin' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_unregisterplugin.php',
    'Smarty_Internal_Method_UnregisterResource' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_method_unregisterresource.php',
    'Smarty_Internal_Nocache_Insert' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_nocache_insert.php',
    'Smarty_Internal_ParseTree' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_parsetree.php',
    'Smarty_Internal_ParseTree_Code' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_parsetree_code.php',
    'Smarty_Internal_ParseTree_Dq' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_parsetree_dq.php',
    'Smarty_Internal_ParseTree_DqContent' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_parsetree_dqcontent.php',
    'Smarty_Internal_ParseTree_Tag' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_parsetree_tag.php',
    'Smarty_Internal_ParseTree_Template' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_parsetree_template.php',
    'Smarty_Internal_ParseTree_Text' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_parsetree_text.php',
    'Smarty_Internal_Resource_Eval' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_resource_eval.php',
    'Smarty_Internal_Resource_Extends' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_resource_extends.php',
    'Smarty_Internal_Resource_File' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_resource_file.php',
    'Smarty_Internal_Resource_Php' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_resource_php.php',
    'Smarty_Internal_Resource_Stream' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_resource_stream.php',
    'Smarty_Internal_Resource_String' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_resource_string.php',
    'Smarty_Internal_Runtime_CacheModify' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_cachemodify.php',
    'Smarty_Internal_Runtime_CacheResourceFile' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_cacheresourcefile.php',
    'Smarty_Internal_Runtime_Capture' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_capture.php',
    'Smarty_Internal_Runtime_CodeFrame' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_codeframe.php',
    'Smarty_Internal_Runtime_FilterHandler' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_filterhandler.php',
    'Smarty_Internal_Runtime_Foreach' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_foreach.php',
    'Smarty_Internal_Runtime_GetIncludePath' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_getincludepath.php',
    'Smarty_Internal_Runtime_Inheritance' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_inheritance.php',
    'Smarty_Internal_Runtime_Make_Nocache' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_make_nocache.php',
    'Smarty_Internal_Runtime_TplFunction' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_tplfunction.php',
    'Smarty_Internal_Runtime_UpdateCache' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_updatecache.php',
    'Smarty_Internal_Runtime_UpdateScope' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_updatescope.php',
    'Smarty_Internal_Runtime_WriteFile' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_runtime_writefile.php',
    'Smarty_Internal_SmartyTemplateCompiler' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_smartytemplatecompiler.php',
    'Smarty_Internal_Template' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_template.php',
    'Smarty_Internal_TemplateBase' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_templatebase.php',
    'Smarty_Internal_TemplateCompilerBase' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_templatecompilerbase.php',
    'Smarty_Internal_Templatelexer' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_templatelexer.php',
    'Smarty_Internal_Templateparser' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_templateparser.php',
    'Smarty_Internal_TestInstall' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_testinstall.php',
    'Smarty_Internal_Undefined' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_undefined.php',
    'Smarty_Resource' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_resource.php',
    'Smarty_Resource_Custom' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_resource_custom.php',
    'Smarty_Resource_Recompiled' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_resource_recompiled.php',
    'Smarty_Resource_Uncompiled' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_resource_uncompiled.php',
    'Smarty_Security' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_security.php',
    'Smarty_Template_Cached' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_template_cached.php',
    'Smarty_Template_Compiled' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_template_compiled.php',
    'Smarty_Template_Config' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_template_config.php',
    'Smarty_Template_Resource_Base' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_template_resource_base.php',
    'Smarty_Template_Source' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_template_source.php',
    'Smarty_Undefined_Variable' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_undefined_variable.php',
    'Smarty_Variable' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_variable.php',
    'Stringable' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
    'Symfony\\Polyfill\\Ctype\\Ctype' => $vendorDir . '/symfony/polyfill-ctype/Ctype.php',
    'Symfony\\Polyfill\\Mbstring\\Mbstring' => $vendorDir . '/symfony/polyfill-mbstring/Mbstring.php',
    'Symfony\\Polyfill\\Php80\\Php80' => $vendorDir . '/symfony/polyfill-php80/Php80.php',
    'Symfony\\Polyfill\\Php80\\PhpToken' => $vendorDir . '/symfony/polyfill-php80/PhpToken.php',
    'TPC_yyStackEntry' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_configfileparser.php',
    'TP_yyStackEntry' => $vendorDir . '/smarty/smarty/libs/sysplugins/smarty_internal_templateparser.php',
    'UnhandledMatchError' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
    'ValueError' => $vendorDir . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
);
