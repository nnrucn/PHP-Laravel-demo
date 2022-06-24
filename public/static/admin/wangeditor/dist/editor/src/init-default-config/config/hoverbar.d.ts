/**
 * @description hoverbar 配置
 * @author wangfupeng
 */
import { Node } from 'slate';
import { IDomEditor } from '@wangeditor/core';
export declare function genDefaultHoverbarKeys(): {
    text: {
        match: (editor: IDomEditor, n: Node) => boolean;
        menuKeys: string[];
    };
    link: {
        menuKeys: string[];
    };
    image: {
        menuKeys: string[];
    };
    video: {
        menuKeys: string[];
    };
    pre: {
        menuKeys: string[];
    };
    table: {
        menuKeys: string[];
    };
};
export declare function genSimpleHoverbarKeys(): {
    link: {
        menuKeys: string[];
    };
    image: {
        menuKeys: string[];
    };
    video: {
        menuKeys: string[];
    };
    pre: {
        menuKeys: string[];
    };
    table: {
        menuKeys: string[];
    };
};
