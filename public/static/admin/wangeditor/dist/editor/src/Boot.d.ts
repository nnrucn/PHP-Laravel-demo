/**
 * @description Editor View class
 * @author wangfupeng
 */
import { IDomEditor, IEditorConfig, IToolbarConfig, IRegisterMenuConf, IRenderElemConf, RenderTextStyleFnType, IElemToHtmlConf, TextToHtmlFnType, TextStyleToHtmlFnType } from '@wangeditor/core';
declare type PluginType = <T extends IDomEditor>(editor: T) => T;
declare class Boot {
    constructor();
    static editorConfig: Partial<IEditorConfig>;
    static setEditorConfig(newConfig?: Partial<IEditorConfig>): void;
    static simpleEditorConfig: Partial<IEditorConfig>;
    static setSimpleEditorConfig(newConfig?: Partial<IEditorConfig>): void;
    static toolbarConfig: Partial<IToolbarConfig>;
    static setToolbarConfig(newConfig?: Partial<IToolbarConfig>): void;
    static simpleToolbarConfig: Partial<IToolbarConfig>;
    static setSimpleToolbarConfig(newConfig?: Partial<IToolbarConfig>): void;
    static plugins: PluginType[];
    static registerPlugin(plugin: PluginType): void;
    static registerMenu(menuConf: IRegisterMenuConf, customConfig?: {
        [key: string]: any;
    }): void;
    static registerRenderElem(renderElemConf: IRenderElemConf): void;
    static registerRenderTextStyle(fn: RenderTextStyleFnType): void;
    static registerElemToHtml(elemToHtmlConf: IElemToHtmlConf): void;
    static registerTextToHtml(fn: TextToHtmlFnType): void;
    static registerTextStyleToHtml(fn: TextStyleToHtmlFnType): void;
}
export default Boot;
