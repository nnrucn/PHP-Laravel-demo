/**
 * @description create
 * @author wangfupeng
 */
import { Descendant } from 'slate';
import { DOMElement } from './utils/dom';
import { IEditorConfig, IDomEditor, IToolbarConfig, Toolbar } from '@wangeditor/core';
interface ICreateEditorOption {
    selector: string | DOMElement;
    config: Partial<IEditorConfig>;
    content: Descendant[];
    mode: string;
}
interface ICreateToolbarOption {
    editor: IDomEditor | null;
    selector: string | DOMElement;
    config?: Partial<IToolbarConfig>;
    mode?: string;
}
/**
 * 创建 editor 实例
 */
export declare function createEditor(option?: Partial<ICreateEditorOption>): IDomEditor;
/**
 * 创建 toolbar 实例
 */
export declare function createToolbar(option: ICreateToolbarOption): Toolbar;
export {};
